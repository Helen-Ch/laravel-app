<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } /*else {
            $orderId = Order::all()->first()->id;
            $order = Order::findOrFail($orderId);
        }*/

        //  dd($order->id);
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return  redirect()->route('main');
        }
        $order = Order::find($orderId);
        // dd($request->all());
        // dd($request->name);
        $success = $order->saveOrder($request->name, $request->phone);

        if ($success) {
            session()->flash('success', 'Ваш заказ принят в обработку!');
        } else {
            session()->flash('warning', 'Что-то пошло не так (, заказ не принят.');
        }
        return redirect()->route('main');
    }


    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return  redirect()->route('main');
        }
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            //  dd($pivotRow);
            $pivotRow->count++;
            $pivotRow->update();
            //  dd($pivotRow);
        } else {
            $order->products()->attach($productId);
        }

        // lesson 11
        if (Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }


        $product = Product::find($productId);
        session()->flash('success', 'Добавлен товар ' . $product->name);

        //  dump($order->products);
        //  dump($order);
        return redirect()->route('basket');
    }
    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
        //  $orderId = Order::all()->first()->id;
        //  $order = Order::findOrFail($orderId);
        //  $order->products()->detach($productId);
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

        $product = Product::find($productId);
        session()->flash('warning', 'Удален товар ' . $product->name);
        return redirect()->route('basket');
    }
}
