<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /*public function getCategory()
    {
        //  $category = Category::where('id', $this->category_id)->get()->first(); // возвращает коллекцию
        return $category = Category::find($this->category_id); // возвращает 1-й эл-т
        //  dd($category);
    }*/

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
