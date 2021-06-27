<?php


namespace App\Classes;


use App\Mail\OrderCreated;
use App\Models\Order;
use App\Models\Product;
use App\Models\Sku;
use App\Services\CurrencyConversion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Basket
{
    protected $order;

    /**
     * Basket constructor.
     * @param bool $createOrder
     */
    public function __construct(bool $createOrder = false)
    {
        /*$orderId = session('orderId');
        if (is_null($orderId) && $createOrder) {
            $data = [];
            if (Auth::check()) {
                $data['user_id'] = Auth::id();
            }

            $this->order = Order::create($data);
            session(['orderId' => $this->order->id]);
        } else {
            $this->order = Order::findOrFail($orderId);
        }*/
        // lesson 30
        $order = session('order');
        if (is_null($order) && $createOrder) {
            $data = [];
            if (Auth::check()) {
                $data['user_id'] = Auth::id();
            }
            // $data['currency_id'] = CurrencyConversion::getCurrentCurrencyFromSession();
            // lesson 30
            $data['currency_id'] = CurrencyConversion::getCurrentCurrencyFromSession()->id;

            $this->order = new Order($data);
            session(['order' => $this->order]);
        } else {
            $this->order = $order;
        }
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    public function countAvailable($updateCount = false)
    {
        /*foreach ($this->order->products as $orderProduct) {
            if ($orderProduct->count < $this->getPivotRow($orderProduct)->count) {
                return  false;
            }
            if ($updateCount) {
                $orderProduct->count -= $this->getPivotRow($orderProduct)->count;
            }
        }

        if ($updateCount) {
            $this->order->products->map->save(); // обновляем кол-во товаров, вместо foreach use map
        }*/

        // lesson 30
        /*$products = collect([]);
        foreach ($this->order->products as $orderProduct) {
            $product = Product::find($orderProduct->id);
            if ($orderProduct->count < $orderProduct->countInOrder) {
                return  false;
            }
            if ($updateCount) {
                $product->count -= $orderProduct->countInOrder;
                $products->push($product);
            }
        }

        if ($updateCount) {
            $products->map->save(); // обновляем кол-во товаров, вместо foreach use map
        }*/
        // lesson 35
        $skus = collect([]);
        foreach ($this->order->skus as $orderSku) {
            $sku = Sku::find($orderSku->id);
            if ($orderSku->count < $orderSku->countInOrder) {
                return  false;
            }
            if ($updateCount) {
                $sku->count -= $orderSku->countInOrder;
                $skus->push($sku);
            }
        }

        if ($updateCount) {
            $skus->map->save(); // обновляем кол-во товаров, вместо foreach use map
        }
        return true;
    }

    /**
     * @param $name
     * @param $phone
     * @return mixed
     */
    public function saveOrder($name, $phone, $email)
    {
        if (!$this->countAvailable(true)) {
            return  false;
        }

        $this->order->saveOrder($name, $phone);

        // lesson 24
        Mail::to($email)->send(new OrderCreated($name, $this->getOrder()));
        // lesson 30
        //return $this->order->saveOrder($name, $phone);
        return true;
    }

    // lesson 30
    /*protected function getPivotRow($product)
    {
        return $this->order->products()->where('product_id', $product->id)->first()->pivot;
    }*/
    // lesson 35 заменяем на sku
    public function removeProduct(Product $product)
    {
        /*if ($this->order->products->contains($product->id)) {
            $pivotRow = $this->getPivotRow($product);
            if ($pivotRow->count < 2) {
                $this->order->products()->detach($product->id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        Order::changeFullSum(-$product->price);*/

        // lesson 30
        if ($this->order->products->contains($product)) {
            $pivotRow = $this->order->products->where('id', $product->id)->first();
            if ($pivotRow->countInOrder < 2) {
                $this->order->products->pop($product);
            } else {
                $pivotRow->countInOrder--;
            }
        }
    }


    /*public function addProduct(Product $product)
    {
        // dd($product->count); максимальное кол-во товара на склааде, pivotRow->count - количество товаров в заказе
        /*if ($this->order->products->contains($product->id)) {
            $pivotRow = $this->getPivotRow($product);
            $pivotRow->count++;
            if ($pivotRow->count > $product->count) {
                return false;
            }

            $pivotRow->update();
        } else {
            if ($product->count == 0) {
                return  false;
            }
            $this->order->products()->attach($product->id);
        }

        Order::changeFullSum($product->price);*/


        // lesson 30
        /*if ($this->order->products->contains($product)) {
            $pivotRow = $this->order->products->where('id', $product->id)->first();
            if ($pivotRow->countInOrder >= $product->count) {
                return false;
            }
            $pivotRow->countInOrder++;
        } else {
            if ($product->count == 0) {
                return  false;
            }
            $product->countInOrder = 1;
            $this->order->products->push($product);
        }

        return  true;
    }*/

    public function addSku(Sku $sku)
    {
        //dd($sku);
        if ($this->order->skus->contains($sku)) {
            $pivotRow = $this->order->skus->where('id', $sku->id)->first();
            if ($pivotRow->countInOrder >= $sku->count) {
                return false;
            }
            $pivotRow->countInOrder++;
        } else {
            if ($sku->count == 0) {
                return  false;
            }
            $sku->countInOrder = 1;
            $this->order->skus->push($sku);
        }

        return  true;
    }

    public function removeSku(Sku $sku)
    {
        if ($this->order->skus->contains($sku)) {
            $pivotRow = $this->order->skus->where('id', $sku->id)->first();
            if ($pivotRow->countInOrder < 2) {
                $this->order->skus->pop($sku);
            } else {
                $pivotRow->countInOrder--;
            }
        }
    }
}
