<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /*public function getCategory()
    {
        //  $category = Category::where('id', $this->category_id)->get()->first(); // возвращает экземпляр коллекции, без [0]
        return $category = Category::find($this->category_id); // возвращает 1-й эл-т
        //  dd($category);
    }*/

    protected $fillable = ['category_id', 'name', 'code', 'description', 'image', 'price', 'hit', 'new', 'recommend'];

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

}
