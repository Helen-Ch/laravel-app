<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } else {
            $orderId = Order::all()->first()->id;
            $order = Order::findOrFail($orderId);
        }

//        dd($order->id);
        return view('basket', compact('order'));
    }

    public function basketPlace()
    {
        return view('order');
    }
    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
//            $order = Order::create()->id;
//            dd($order);
//            session(['orderId' => $order->id]);
            $order = Order::create();
            session(['orderId' => $order]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
//            dd($pivotRow);
            $pivotRow->count++;
            $pivotRow->update();
//             dd($pivotRow);
        } else {
            $order->products()->attach($productId);

        }

//        dump($order->products);
//        dump($order);
        return redirect()->route('basket');
    }
    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
//            $orderId = Order::all()->first()->id;
//            $order = Order::findOrFail($orderId);
//            $order->products()->detach($productId);
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return redirect()->route('basket');
    }
}
