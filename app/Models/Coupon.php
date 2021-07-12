<?php

namespace App\Models;

use App\Services\CurrencyConversion;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'value', 'type', 'currency_id', 'only_once', 'expired_at', 'description'];

    //protected $casts = ['expired_at' => 'date']; // for carbon or
    protected $dates = ['expired_at'];

    public function orders()
    {
        return $this->hasMany(Order::class);// 1 купон может быть в некольких заказах
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function isAbsolute()
    {
        return $this->type === 1;
    }

    public function isOnlyOnce()
    {
        return $this->only_once === 1;
    }

    // lesson 39
    public function availableForUse()
    {
        $this->refresh();
        // если можно не 1 раз использовать или нет других заказов с этим купоном
        if (!$this->isOnlyOnce() || $this->orders->count() === 0) {
            // lte less or equals than
            // lt less than
            // gte / gt greater
            return is_null($this->expired_at) || $this->expired_at->gte(Carbon::now());
        }
        return false;
    }

    public function applyCost($price, Currency $currency = null)
    {
        if ($this->isAbsolute()) {
            return $price - CurrencyConversion::convert($this->value, $this->currency->code, $currency->code);
        } else {
            return $price - ($price * $this->value / 100);
        }
    }
}
