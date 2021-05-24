<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Translatable;

    // lesson 19 error for debug
    // protected $table = 'product'; // неправильное название таблицы products

    /*public function getCategory()
    {
        //  $category = Category::where('id', $this->category_id)->get()->first(); // возвращает экземпляр коллекции, без [0]
        return $category = Category::find($this->category_id); // возвращает 1-й эл-т
        //  dd($category);
    }*/

    protected $fillable = [
        'category_id',
        'name',
        'code',
        'description',
        'image',
        'price',
        'hit',
        'new',
        'recommend',
        'count',
        'name_en',
        'description_en',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function setNewAttribute($value)
    {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    // lesson 20
    public function scopeHit($query)
    {
        return $query->where('hit', 1);
    }

    public function scopeNew($query)
    {
        return $query->where('new', 1);
    }

    public function scopeRecommend($query)
    {
        return $query->where('recommend', 1);
    }

    public function setHitAttribute($value)
    {
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }

    public function setRecommendAttribute($value)
    {
        $this->attributes['recommend'] = $value === 'on' ? 1 : 0;
    }

    public function isHit()
    {
        return $this->hit === 1;
    }

    public function isNew()
    {
        return $this->new === 1;
    }

    public function isRecommend()
    {
        return $this->recommend === 1;
    }

    // lesson 22
    public function isAvailable()
    {
        return !$this->trashed() && $this->count > 0;
    }

    public function scopeByCode($query, $code)
    {
        return $query->where('code', $code);
    }

}
