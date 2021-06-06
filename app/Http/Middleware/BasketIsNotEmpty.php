<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $orderId = session('orderId');
        // lesson 30
        $order = session('order');
        /*if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            if ($order->products->count() > 0) {
                return $next($request);
            }
        }*/
        // lesson 20
        /*if (!is_null($orderId) && Order::getFullSum() > 0) {
            return $next($request);
        }*/
        // lesson 30
        if (!is_null($order) && $order->getFullSum() > 0) {
            return $next($request);
        }
        session()->forget('order');
        session()->flash('warning', 'Ваша корзина пуста!');
        return redirect()->route('main');
    }
}
