<?php

namespace App\Http\Controllers;
use JWTAuth;
use App\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function post(Request $request){
        if(! $user = JWTAuth::parseToken()->authenticate()){
            return response()->json(['message' => 'User not found'], 404);
        }

        $user = JWTAuth::parseToken()->toUser();

        $country = new Countries();
        $country->name = $request->input('name');
        $country->dial_code = $request->input('dial_code');
        $country->code = $request->input('code');
        $country->save();
        return response()->json(['country' => $country,'user' => $user], 201);
    }

    public function get(){
        $countries = Countries::all();
        $response = [
            'countries' => $countries
        ];
        return response()->json($response, 200);
    }

    public function put(Request $request, $id){
        $country = Countries::find($id);
        if(!$country){
            return response()->json(['message' => 'Country not found'], 404);
        }
        $country->name = $request->input('name');
        $country->dial_code = $request->input('dial_code');
        $country->code = $request->input('code');
        $country->save();
        return response()->json(['country' => $country], 200);
    }

    public function delete($id){
        $country = Countries::find($id);
        $country->delete();
        return response()->json(['message' => 'Country Deleted'], 200);
    }

    public function getCountries()
    {
        #input url
        $url = 'http://gaagrdzele.com/api/app/countries';
        $countries = file_get_contents($url);

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('app.countries.index', ['countries' => json_decode($countries, true)]);
    }


    /**
     * @param $capitalname
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCityWeather($capitalname){

        $url = "https://api.apixu.com/v1/forecast.json?key=84ffda9466d14102837150237172507&q=" .  $capitalname;

        $weather = json_decode(file_get_contents($url), true);

        return view('app.countries.wheater', ['weather' => $weather]);
        //dd($weather);
    }


}
