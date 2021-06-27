<?php

namespace App\Models;

use App\Mail\SendSubscriptionMessage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Subscription extends Model
{
    use HasFactory;

    // lesson 35
    // protected $fillable = ['email', 'product_id'];
    protected $fillable = ['email', 'sku_id'];

    /*public function scopeActiveByProductId($query, $productId)
    {
        return $query->where('status', 0)->where('product_id', $productId);
    }*/
    public function scopeActiveBySkuId($query, $skuId)
    {
        return $query->where('status', 0)->where('sku_id', $skuId);
    }

    /*public function product()
    {
        return $this->belongsTo(Product::class);
    }*/

    public function sku()
    {
        return $this->belongsTo(Sku::class);
    }

    /*public static function sendEmailsBySubscription(Product $product)
    {
        $subscriptions = self::activeByProductId($product->id)->get();
        foreach ($subscriptions as $subscription) {
            Mail::to($subscription->email)->send(new SendSubscriptionMessage($product));
            $subscription->status = 1;
            $subscription->save(); // если через update(), нужно добавить поле 'status' в $fillable
        }
    }*/

    public static function sendEmailsBySubscription(Sku $sku)
    {
        $subscriptions = self::activeBySkuId($sku->id)->get();
        foreach ($subscriptions as $subscription) {
            Mail::to($subscription->email)->send(new SendSubscriptionMessage($sku));
            $subscription->status = 1;
            $subscription->save(); // если через update(), нужно добавить поле 'status' в $fillable
        }
    }
}
