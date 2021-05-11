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

    protected $fillable = ['category_id', 'name', 'code', 'description', 'image', 'price'];

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
}
