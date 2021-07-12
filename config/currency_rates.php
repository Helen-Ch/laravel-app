<?php

return [
    // 'api_url' => 'https://api.exchangeratesapi.io/latest?access_key=6a5345e345ddb4d72bba1036f1a171e2',
    //'api_url_start' => 'https://free.currconv.com/api/v7/convert?q=',
    //'api_url_end' => '&compact=ultra&apiKey=d63614ff4314a41c4f50',

    // 'api_url' => 'https://free.currconv.com/api/v7/convert?apiKey=d63614ff4314a41c4f50&q=USD_RUB,EUR_RUB',
    // 503 - 'api_url' => 'https://free.currconv.com/api/v7/convert?q=USD_RUB,EUR_RUB&compact=ultra&apiKey=aee669c0568b59171935',

    // free plan base currency only USD, so rate RUB-EUR is need to be get from USD-EUR rate
    'api_url' => 'http://apilayer.net/api/live?access_key=150a5380dc80c5ab8ac1bed983c41b0c&currencies=RUB,EUR&source=USD&format=1',
];
