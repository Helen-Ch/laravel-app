<?php


namespace App\Services;

use App\Models\Currency;

class CurrencyConversion
{
    protected static $container;

    public static function loadContainer()
    {
        if (is_null(self::$container)) {
            $currencies = Currency::get();
            foreach ($currencies as $currency) {
                self::$container[$currency->code] = $currency;
            }
        }
    }

    public static function getCurrencies()
    {
        return self::$container;
    }

    public static function convert($sum, $originCurrencyCode = 'RUB', $targetCurrencyCode = null)
    {
        self::loadContainer();
//        $originCurrency = Currency::byCode($originCurrencyCode)->first();
        $originCurrency = self::$container[$originCurrencyCode];
        if (is_null($targetCurrencyCode)) {
            $targetCurrencyCode = session('currency', 'RUB');
        }
//        $targetCurrency = Currency::byCode($targetCurrencyCode)->first();
        $targetCurrency = self::$container[$targetCurrencyCode];


        return $sum * $originCurrency->rate / $targetCurrency->rate;
    }

    public static function getCurrencySymbol()
    {
        self::loadContainer();
//        $currency = Currency::byCode(session('currency', 'RUB'))->first();
        $currencyFromSession = session('currency', 'RUB');

        $currency = self::$container[$currencyFromSession];
        return $currency->symbol;
    }
}
