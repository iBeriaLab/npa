<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'UserController@getUsers')->name('users');

Route::get('/countries', 'CountriesController@getCountries')->name('countries');
Route::get('/capital/{capitalname}', 'CountriesController@getCityWeather')->name('capital');



//**** posts ******/
Route::get('/posts', 'PostsController@getPosts')->name('posts');


//*****  currencies   *****/

Route::get('/currency', 'CurrencyController@getCurrencies2')->name('currency');

//*****  end currencies   *****/

Route::get('/users', function() {

    $url = "http://gaagrdzele.com/api/app/users";

    $json = json_decode(file_get_contents($url), true);

    dd($json);
});


Route::get('/coun', function() {

    $url = "http://gaagrdzele.com/api/app/countries";

    $json = json_decode(file_get_contents($url), true);

    dd($json);
});

Route::get('/cit', function() {

    $url = "http://gaagrdzele.com/api/app/posts";

    $json = json_decode(file_get_contents($url), true);

    dd($json);
});

Route::get('/cur', function() {

    //$url = "https://finance.yahoo.com/webservice/v1/symbols/allcurrencies/quote";

   // $json = json_decode(file_get_contents($url), true);

    $xml = file_get_contents('https://finance.yahoo.com/webservice/v1/symbols/allcurrencies/quote');
    $json = simplexml_load_string($xml);
    //$array = json_decode($json,TRUE);

    dd($json);
});



/***** Lang   *****/

Route::post('/language-choser', 'LanguageController@changeLanguage');

Route::post('/language', array(
    'before' => 'carf',
    'as' => 'language-choser',
    'uses' => 'LanguageController@changeLanguage'
));


