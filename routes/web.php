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


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Auth::routes();
//
//Route::get('/', "OptionsController@getlang");

Route::get('/', 'HomeController@index')->name("home.page");
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/language', 'HomeController@language');

Route::group(['prefix' => 'customer', 'namespace' => 'admin'], function () {

    Route::get('/', 'CustomersController@index')->name('customer.list');
    Route::match(['get', 'post'], 'create', 'CustomersController@create')->name('customer.create');
    Route::match(['get', 'post'], 'update', 'CustomersController@update')->name('customer.update');
    Route::delete('delete/{id}', 'CustomersController@delete')->name('customer.delete');

});




Route::group(["prefix" => "option"],function (){

    Route::get("/lang/{lang}","OptionsController@setLang")->name("setLang");

});


Route::post("test","HomeController@test")->name("home.test");