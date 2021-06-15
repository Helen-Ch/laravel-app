<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    use HasFactory;

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
}
