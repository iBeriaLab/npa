<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    //https://api.apixu.com/v1/forecast.json?key=84ffda9466d14102837150237172507&q=

    public function getCountries()
    {
        #input url
        $url = 'http://gaagrdzele.com/api/app/countries';
        $countries = file_get_contents($url);
        $cities = $countries['$val']['capitalname'];

        $WeatherUrl = 'https://api.apixu.com/v1/forecast.json?key=84ffda9466d14102837150237172507&q=';

        $getWeather = file_get_contents($WeatherUrl . $cities);

        //$capitals = file_get_contents($cityurl);

        return view('app.countries.index', ['countries' => json_decode($countries, true)];
    }
}
