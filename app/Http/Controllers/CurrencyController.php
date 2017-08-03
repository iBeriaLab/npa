<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function getCurrencies()
    {
        #input url
        $url = 'http://www.mycurrency.net/service/rates';
        $currencies = file_get_contents($url);

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('app.currency.index', ['currencies' => json_decode($currencies, true)]);
    }


    public function getCurrencies2()
    {
        #input url
        $url = file_get_contents('https://finance.yahoo.com/webservice/v1/symbols/allcurrencies/quote');
        $currencies = simplexml_load_string($url);

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('app.currency.index', ['currencies' => json_decode($currencies, true)]);
    }

}
