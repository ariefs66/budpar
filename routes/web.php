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
//view
Route::get('/', function () {
    return view('index');
});
Route::get('/plan-trip', function () {
    return view('plan-trip');
});
Route::get('/hotels', function () {
    return view('pages.hotel');
});
//endview

//auth
Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/resend/{id}', 'Auth\RegisterController@resend');
//endauth

//controller
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get_hotel', 'MainController@getHotel');
Route::get('/get_restaurant', 'MainController@getRestaurant');
Route::get('/get_data', 'MainController@getData');
Route::get('/hotels/{hotel}', 'MainController@getDetailHotel');
