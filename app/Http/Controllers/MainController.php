<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Review;
use App\Models\Sku;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use \Debugbar;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request)
    {
        //$products = Product::get();

        // lesson 19
        // dd($request->ip());
        // \Log::channel('daily')->info($request->ip());
        // \Log::channel('daily')->error($request->ip());
        // \Log::channel('daily')->debug($request->ip());
        // Debugbar::info('my info again');

        // lesson 17
        // dd($request->all()); //увидеть, какие параметры пришли а гет
//        $productsQuery = Product::query();

        // lesson 35
        // lesson 19
        /*$productsQuery = Product::with('category');

        if ($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }

        // Lesson 18
        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                // $productsQuery->where($field, 1);
                // lesson 20
                $productsQuery->$field();
            }
        }

        $products = $productsQuery->paginate(6)->withQueryString();

        // lesson 31
        // $categories = Category::get();
        // return view('main', compact('products', 'categories'));
        return view('main', compact('products'));*/

        //$skusQuery = Sku::query();
        // фильтры, product.category потому что sku не видит category
        $skusQuery = Sku::with('product', 'product.category');

        if ($request->filled('price_from')) {
            $skusQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $skusQuery->where('price', '<=', $request->price_to);
        }

        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                $skusQuery->whereHas('product', function($query) use ($field) {
                    $query->$field();
                });
            }
        }

        $skus = $skusQuery->paginate(6)->withQueryString();
        return view('main', compact('skus'));
    }

    public function categories()
    {
        /*$categories = Category::get();
        return view('categories', compact('categories'));*/
        // lesson 31
        return view('categories');
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        //  $products = Product::where('category_id', $category->id)->get();
        //  dd($category);
        //  return view('category', compact('category', 'products'));
        return view('category', compact('category'));
    }

    // commented in lesson 35
    /*public function product($category, $productCode)
    {
        // dd($product);
        // dump($product);
        // dd($product); - не положит в сессию
        // dd(\request());
        // $reviews = Review::get();

        //$product = Product::where('code', $product)->first();

        //$reviews = Review::where('product_id', $product_id)->get();
        // dd($product->reviews);

        // lesson 22
        $product = Product::withTrashed()->byCode($productCode)->firstOrFail();

        return view('product', ['product' => $product]);
    }*/

    // lesson 35, чтобы работала инъекция Sku $skus, в роуте нужно указать /{skus}
    public function sku($categoryCode, $productCode, Sku $skus)
    {
        // lesson 35
        // dd($skus);
        if ($skus->product->code != $productCode) {
            abort(404, 'Product not found');
        }
        if ($skus->product->category->code != $categoryCode) {
            abort(404, 'Category not found');
        }

        return view('product', compact('skus'));
    }

    protected function redirectTo()
    {
        if (Auth::user()->isAdmin()) {
            return redirect()->route('home');
        } elseif (count(Auth::user()->orders()->where('status', 1)->get()) > 0) {
            return redirect()->route('person.orders.index');
        } else {
            return redirect()->route('main');
        }
    }
    // lesson 35
    /*public function subscribe(SubscriptionRequest $request, Product $product)
    {
        // dd($product);
        Subscription::create(
            [
                'email' => $request->email,
                'product_id' => $product->id
            ]
        );
        return redirect()->back()->with('success', 'Спасибо, мы сообщим Вам о поуступлении товара');
    }*/

    public function subscribe(SubscriptionRequest $request, Sku $skus)
    {
        // dd($product);
        Subscription::create(
            [
                'email' => $request->email,
                'sku_id' => $skus->id
            ]
        );
        return redirect()->back()->with('success', 'Спасибо, мы сообщим Вам о поуступлении товара');
    }

    public function changeLocale($locale)
    {
        $availableLocales = ['ru', 'en'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }

        session(['locale' => $locale]);
        App::setLocale($locale);
        // $currentLocale = App::getLocale();
        // dd($currentLocale);
        return redirect()->back();
    }

    public function changeCurrency($currencyCode)
    {
        $currency = Currency::byCode($currencyCode)->firstOrFail();
        session(['currency' => $currency->code]);
        return redirect()->back();
    }
}
