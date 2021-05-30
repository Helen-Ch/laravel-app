<?php

namespace App\Services;

use GuzzleHttp\Client;

class CurrencyRates
{
    public static function getRates(/*$tocCurrencyCode = 'RUB'*/)
    {
        $result = [];
        $baseCurrency = CurrencyConversion::getBaseCurrency();
        // $query = $baseCurrency->code . '_' . $tocCurrencyCode;
        // $url = config('currency_rates.api_url') . '&base=' . $baseCurrency->code;
        // $url = config('currency_rates.api_url_start') . $query . config('currency_rates.api_url_end');
        $url = config('currency_rates.api_url');

        $client = new Client();

        $response = $client->request('GET', $url);

        if ($response->getStatusCode() != 200) {
            throw new \UnexpectedValueException('There is a problem with currency service');
        }

        $rates = json_decode($response->getBody()->getContents(), true)['results'];
        foreach ($rates as $rate) {
            $result[$rate['fr']] = $rate['val'];
        }

        foreach (CurrencyConversion::getCurrencies() as $currency) {
            if (!$currency->isMain()) {
                if (!isset($result[$currency->code])) {
                    throw new \UnexpectedValueException('There is a problem with currency ' . $currency->code);
                } else {
                    $currency->update(['rate' => $result[$currency->code]]);
                    $currency->touch(); // чтобы обновлялось поле updated_at даже если rate остался неизменный
                }
            }
        }

        // dd($result);
        return $result;
    }

   /* public static function getRates()
    {
        $baseCurrency = CurrencyConversion::getBaseCurrency();

        $url = config('currency_rates.api_url') . '?base=' . $baseCurrency->code;

        $client = new Client();

        $response = $client->request('GET', $url);

        if ($response->getStatusCode() !== 200) {
            throw new Exception('There is a problem with currency rate service');
        }

        $rates = json_decode($response->getBody()->getContents(), true)['rates'];

        foreach (CurrencyConversion::getCurrencies() as $currency) {
            if (!$currency->isMain()) {
                if (!isset($rates[$currency->code])) {
                    throw new Exception('There is a problem with currency ' . $currency->code);
                } else {
                    $currency->update(['rate' => $rates[$currency->code]]);
                    $currency->touch();
                }
            }
        }
    }*/
}
