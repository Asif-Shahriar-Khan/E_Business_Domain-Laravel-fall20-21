<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('layouts.master');
});*/


//Route::group(['middleware'=>['sess']], function() {
    Route::get('/', 'App\Http\Controllers\sadashcontroller@index')->name('superadmin.index');
//});

Route::get('/login', 'App\Http\Controllers\saloginController@index')->name('superadminlogin.index');
Route::post('/login', 'App\Http\Controllers\saloginController@verify')->name('superadminlogin.verify');
Route::get('/logout', 'App\Http\Controllers\salogoutController@index')->name('superadminlogout.index');
Route::get('/shops', 'App\Http\Controllers\shopController@index')->name('shop.index');
Route::get('/shoplist', 'App\Http\Controllers\shopController@shoplist')->name('shop.shoplist');
Route::get('/shops/create', 'App\Http\Controllers\shopController@create')->name('shop.create');
Route::post('/shops/store', 'App\Http\Controllers\shopController@store')->name('shop.store');
Route::get('/shops/edit/{id}', 'App\Http\Controllers\shopController@edit')->name('shop.edit');
Route::put('/shops/update/{id}', 'App\Http\Controllers\shopController@update')->name('shop.update');
Route::delete('/shops/delete/{id}', 'App\Http\Controllers\shopController@destroy')->name('shop.delete');

//Route::post('/shops/search', 'App\Http\Controllers\shopController@search')->name('shop.search');