<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sku;

class SkusController extends Controller
{
    public function getSkus()
    {
        //available() = scopeAvailable из модели
        //$skus = Sku::available()->get()->toArray();
        //return response($skus, 201); - чтобы передать код ответа, н-р 201
        //return response()->json($skus);
        // append('productname') - название getProductNameAttribute из модели
        // with('product') - чтобы уменьшить количество запросов (не только к скус, но и каждый раз к продукт)
        return Sku::with('product')->available()->get()->append('product_name');
    }
}
