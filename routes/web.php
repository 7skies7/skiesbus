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
use App\Role;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
	$user = new App\User;

    return App\User::find(1)->roles()->first();
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
	Route::get('/routes', 'RouteController@index')->name('routes');
	Route::get('/routes/create', 'RouteController@create')->name('addRoute');
	Route::post('/routes/store', 'RouteController@store')->name('saveRoute');
	Route::get('/routes/{routeid}/delete', 'RouteController@delete')->name('routeDelete');

	Route::get('/buses', 'BusController@index')->name('buses');
	Route::get('/buses/create', 'BusController@create')->name('addBus');
	Route::post('/buses/store', 'BusController@store')->name('saveBus');
	Route::get('/buses/{routeid}/delete', 'BusController@delete')->name('busDelete');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

