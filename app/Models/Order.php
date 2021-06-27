<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'currency_id', 'sum'];

    public function products()
    {
        // return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
        // lesson 30
        return $this->belongsToMany(Product::class)->withPivot(['count', 'price'])->withTimestamps();
    }

    // lesson 35 вместо всех продуктов нам нужны skus
    public function skus()
    {
        return $this->belongsToMany(Sku::class)->withPivot(['count', 'price'])->withTimestamps();
    }

    // lesson 30
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    // lesson 20
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    // lesson 20
    public function calculateFullSum()
    {
        $sum = 0;
        // lesson 35
        /*foreach ($this->products()->withTrashed()->get() as $product) {
            $sum += $product->getPriceForCount();
        }*/
        foreach ($this->skus()->withTrashed()->get() as $sku) {
            $sum += $sku->getPriceForCount();
        }

        return $sum;
    }

    // lesson 30
    /*public static function eraseOrderSum()
    {
        session()->forget('full_order_sum');
    }*/

    /* lesson 30 убираем хранение в сессии
    public static function changeFullSum($changeSum)
    {
        $sum = self::getFullSum() + $changeSum;
        session(['full_order_sum' => $sum]);
    }*/

    public /*static*/ function getFullSum()
    {
        /*$sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum; */
        // lesson 20
        //return session('full_order_sum', 0);

        // lesson30
        $sum = 0;
        // lesson 35
        /*foreach ($this->products as $product) {
            $sum += $product->price * ($product->countInOrder ?? 1);
        }*/
        foreach ($this->skus as $sku) {
            $sum += $sku->price * ($sku->countInOrder ?? 1);
        }
        return $sum;
    }

    public function saveOrder($name, $phone)
    {
        /*if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }*/

        // lesson30
        $this->name = $name;
        $this->phone = $phone;
        $this->status = 1;
        $this->sum = $this->getFullSum();
        // lesson 35
        /*$products = $this->products;
        $this->save();
        foreach ($products as $productInOrder) {
            $this->products()->attach($productInOrder, [
                'count' => $productInOrder->countInOrder,
                'price' => $productInOrder->price,
            ]);
        }*/
        $skus = $this->skus;
        $this->save();
        foreach ($skus as $skuInOrder) {
            $this->skus()->attach($skuInOrder, [
                'count' => $skuInOrder->countInOrder,
                'price' => $skuInOrder->price,
            ]);
        }
        session()->forget('order');
        return true;
    }
}
