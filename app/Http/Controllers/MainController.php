<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('main', compact('products'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        //  $products = Product::where('category_id', $category->id)->get();
        //  dd($category);
        //  return view('category', compact('category', 'products'));
        return view('category', compact('category'));

    }

    public function product($category, $product = null)
    {
        // dd($product);
        // dump($product);
        // dd($product); - не положит в сессию
        // dd(\request());
        // $reviews = Review::get();
        $product = Product::where('code', $product)->first();
        //$reviews = Review::where('product_id', $product_id)->get();
        // dd($product->reviews);
        return view('product', ['product' => $product]);
    }
}
