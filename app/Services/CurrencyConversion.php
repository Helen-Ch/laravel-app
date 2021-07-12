<?php


namespace App\Services;

use App\Models\Currency;
use Carbon\Carbon;

class CurrencyConversion
{
    public const DEFAULT_CURRENCY_CODE = 'RUB';

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
        self::loadContainer();
        return self::$container;
    }

    public static function getCurrencyFromSession()
    {
        return session('currency', self::DEFAULT_CURRENCY_CODE);
    }

    public static function getCurrentCurrencyFromSession()
    {
        self::loadContainer();
        $currencyCode = self::getCurrencyFromSession();

        foreach (self::$container as $currency) {
            if ($currency->code === $currencyCode) {
                return $currency;
            }
        }
    }

    public static function convert($sum, $originCurrencyCode = self::DEFAULT_CURRENCY_CODE, $targetCurrencyCode = null)
    {
        self::loadContainer();
//        $originCurrency = Currency::byCode($originCurrencyCode)->first();
        $originCurrency = self::$container[$originCurrencyCode];

        // dd($originCurrency->updated_at->startOfDay(), Carbon::now()->startOfDay());
        if ($originCurrency->code != self::DEFAULT_CURRENCY_CODE) {
            if ($originCurrency->rate == 0 || $originCurrency->updated_at->startOfDay() != Carbon::now()->startOfDay()) {
                CurrencyRates::getRates();
                self::loadContainer();
                $originCurrency = self::$container[$originCurrencyCode];
            }
        }

        if (is_null($targetCurrencyCode)) {
            // $targetCurrencyCode = session('currency', DEFAULT_CURRENCY_CODE);
            // lesson 30
            $targetCurrencyCode = self::getCurrencyFromSession();
        }
//        $targetCurrency = Currency::byCode($targetCurrencyCode)->first();
        $targetCurrency = self::$container[$targetCurrencyCode];
        if ($targetCurrency->code != self::DEFAULT_CURRENCY_CODE) {
            if ($targetCurrency->rate == 0 || $targetCurrency->updated_at->startOfDay() != Carbon::now()->startOfDay(
                )) {
                CurrencyRates::getRates();
                self::loadContainer();
                $targetCurrency = self::$container[$targetCurrencyCode];
            }
        }
        return round($sum * $originCurrency->rate / $targetCurrency->rate, 2);
    }

    public static function getCurrencySymbol()
    {
        self::loadContainer();
        // $currency = Currency::byCode(session('currency', self::DEFAULT_CURRENCY_CODE))->first();
        // $currencyFromSession = session('currency', self::DEFAULT_CURRENCY_CODE);
        // lesson 30
        $currencyFromSession = self::getCurrencyFromSession();

        $currency = self::$container[$currencyFromSession];
        return $currency->symbol;
    }

    public static function getBaseCurrency()
    {
        self::loadContainer();
        foreach (self::$container as $code => $currency) {
            if ($currency->isMain()) {
                return $currency;
            }
        }
    }

    public static function getCurrencyId()
    {
        self::loadContainer();

        $currencyFromSession = self::getCurrencyFromSession();

        $currency = self::$container[$currencyFromSession];
        return $currency->id;
    }
}
