<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


/* Users */
Route::post('/app/user', [
    'uses' => 'Usercontroller@post'
]);

Route::get('/app/users', [
    'uses' => 'Usercontroller@get'
]);

Route::put('/app/user/{id}', [
    'uses' => 'Usercontroller@put'
]);

Route::delete('/app/user/{id}', [
    'uses' => 'Usercontroller@delete'
]);

/* Countries */

Route::post('/app/country', [
    'uses' => 'CountriesController@post',
    'middleware' => 'auth.jwt'
]);

Route::get('/app/countries', [
    'uses' => 'CountriesController@get'
]);

Route::put('/app/country/{id}', [
    'uses' => 'CountriesController@put',
    'middleware' => 'auth.jwt'
]);

Route::delete('/app/country/{id}', [
    'uses' => 'CountriesController@delete',
    'middleware' => 'auth.jwt'
]);




/* Posts */

Route::post('/app/post', [
    'uses' => 'PostsController@post',
    'middleware' => 'auth.jwt'
]);

Route::get('/app/posts', [
    'uses' => 'PostsController@get'
]);

Route::put('/app/post/{id}', [
    'uses' => 'PostsController@put',
    'middleware' => 'auth.jwt'
]);

Route::delete('/app/post/{id}', [
    'uses' => 'PostsController@delete',
    'middleware' => 'auth.jwt'
]);




/*  Auth  */

Route::post('/signup', [
    'uses' => 'UserController@signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@signin'
]);