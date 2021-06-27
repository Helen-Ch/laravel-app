<?php

namespace App\ViewComposers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\View\View;

class BestProductsComposer
{
    public function compose(View $view)
    {
        //$bestProductIds = Order::get()->map->products->flatten()->map->pivot->mapToGroups(function ($pivot) {
        $bestSkuIds = Order::get()->map->skus->flatten()->map->pivot->mapToGroups(function ($pivot) {
            //return [$pivot->product_id => $pivot->count];
            return [$pivot->sku_id => $pivot->count];
        })->map->sum()->sortByDesc(null)->take(3)->keys()->toArray();

        // keys()->toArray() - клвдем ключи в массив
        //$bestProducts = Product::whereIn('id', $bestProductIds)->get();
        $bestSkus = Sku::whereIn('id', $bestSkuIds)->get();
        $view->with('bestSkus', $bestSkus);
    }
}
