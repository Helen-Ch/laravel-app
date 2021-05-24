<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $order = (new Basket())->getOrder();

        // $orderId = session('orderId');
        // lesson 23 убираем эту проверку, т.к. она есть в middleware
        /*if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } /*else {
            $orderId = Order::all()->first()->id;
            $order = Order::findOrFail($orderId);
        }*/
        // $order = Order::findOrFail($orderId);
        //  dd($order->id);
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        // $orderId = session('orderId');
        /*if (is_null($orderId)) {
            return  redirect()->route('main');
        }*/
        // $order = Order::findOrFail($orderId);
        // dd($request->all());
        // dd($request->name);
        // $success = $order->saveOrder($request->name, $request->phone);

        /*if ($success) {
            session()->flash('success', 'Ваш заказ принят в обработку!');
        } else {
            session()->flash('warning', 'Что-то пошло не так (, заказ не принят.');
        }*/

        // lesson 24
        $email = Auth::check() ? Auth::user()->email : $request->email;

        // lesson 23
        if ((new Basket())->saveOrder($request->name, $request->phone, $email)) {
            // session()->flash('success', 'Ваш заказ принят в обработку!');

            // lesson 26
            session()->flash('success', __('basket.you_order_confirmed'));
        } else {
            // session()->flash('warning', 'Что-то пошло не так (, заказ не принят.');
            // session()->flash('warning', 'Товар не доступен для заказа в полном объеме');

            // lesson 26
            session()->flash('warning', __('basket.you_cant_order_more'));
        }

        Order::eraseOrderSum();

        return redirect()->route('main');
    }


    public function basketPlace()
    {
        // $orderId = session('orderId');
        /*if (is_null($orderId)) {
            return  redirect()->route('main');
        }*/
        // $order = Order::findOrFail($orderId);
        $basket = new Basket();
        $order = $basket->getOrder();
        if (!$basket->countAvailable()) {
            session()->flash('warning', 'Товар не доступен для заказа в полном объеме');
            return redirect()->route('basket');
        }

        return view('order', compact('order'));
    }

    public function basketAdd(Product $product/*$productId*/)
    {
        $result = (new Basket(true))->addProduct($product);
        /*$orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::findorFail($orderId);
        }*/

        // if ($order->products->contains($product->id/*$productId*/)) {
            // $pivotRow = $order->products()->where('product_id', $product->id/*$productId*/)->first()->pivot;
            //  dd($pivotRow);
            // $pivotRow->count++;
            // $pivotRow->update();
            //  dd($pivotRow);
        // } else {
            // $order->products()->attach($product->id/*$productId*/);
        // }

        // lesson 11
        /*if (Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }*/

        // lesson 23 убрали, т.к продук добавле через иньекцию Product $product
        // $product = Product::find($productId);

        // lesson 20
        // Order::changeFullSum($product->price);

        if ($result) {
            session()->flash('success', 'Добавлен товар ' . $product->__('name'));
        } else  {
            session()->flash('warning', 'Товар ' . $product->__('name') . ' в большем количестве не доступен для заказа');
        }

        //  dump($order->products);
        //  dump($order);
        return redirect()->route('basket');
    }
    public function basketRemove(Product $product/*$productId*/)
    {
        // lesson 23
        (new Basket())->removeProduct($product);

        // $orderId = session('orderId');
        /*if (is_null($orderId)) {
        //  $orderId = Order::all()->first()->id;
        //  $order = Order::findOrFail($orderId);
        //  $order->products()->detach($productId);
            return redirect()->route('basket');
        }*/
        // $order = Order::findOrFail($orderId);

        // if ($order->products->contains($product->id/*$productId*/)) {
            // $pivotRow = $order->products()->where('product_id', $product->id/*$productId*/)->first()->pivot;
            // if ($pivotRow->count < 2) {
                // $order->products()->detach($product->id/*$productId*/);
              // } else {
                // $pivotRow->count--;
                // $pivotRow->update();
            // }
        // }

        // lesson 22
        // $product = Product::find($productId);

        // lesson 20
        // Order::changeFullSum(-$product->price);

        session()->flash('warning', 'Удален товар ' . $product->__('name'));
        return redirect()->route('basket');
    }
}
