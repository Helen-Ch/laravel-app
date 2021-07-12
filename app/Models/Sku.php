<?php

namespace App\Models;

use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sku extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['product_id', 'count', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // lesson 33, 34
    public function propertyOptions()
    {
        // подставляем сами свое название таблицы, т.к. названия в нашей таблице связей не в алфавитном порядке, а laravel ищет таблицу property_option_sku
        return $this->belongsToMany(PropertyOption::class, 'sku_property_option')->withTimestamps();
    }

    // lesson 35
    public function isAvailable()
    {
        return !$this->product->trashed() && $this->count > 0;
    }

    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    // lesson 39
    public function getPriceAttribute($value)
    {
        return round(CurrencyConversion::convert($value), 2);
    }
}
