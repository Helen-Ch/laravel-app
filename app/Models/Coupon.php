<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'value', 'type', 'currency_id', 'only_once', 'expired_at', 'description'];

    protected $casts = ['expired_at' => 'date']; // for carbon

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
}
