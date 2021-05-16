<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        // $orders = \Auth::user()->orders()->where('status', 1)->get();
        // lesson 17
        $orders = \Auth::user()->orders()->where('status', 1)->paginate(10);

        //  return view('home');
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        // dd(\Auth::user()->orders()->where('status', 1)->get()->contains($order));
        // проверяем, принадлежит ли заказ данному пользователю
        if (!\Auth::user()->orders()->where('status', 1)->get()->contains($order)) {
            return back();
        } else {
            return view('auth.orders.show', compact('order'));
        }
    }
}
