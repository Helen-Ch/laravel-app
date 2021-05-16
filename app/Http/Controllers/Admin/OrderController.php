<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        // $orders = Order::where('status', 1)->get();
        // lesson 17
        $orders = Order::where('status', 1)->paginate(1);

        //  return view('home');
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('auth.orders.show', compact('order'));
    }
}
