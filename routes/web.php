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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Dashboard
Route::get('/dashboard', 'Dashboard\IndexController@index')->name('dashboard.index');

Route::get('/dashboard/requestbuilder', 'Dashboard\RequestBuilderController@index')->name('dashboard.features.requestbuilder');
Route::get('/dashboard/storedrequests', 'Dashboard\StoredRequestsController@index')->name('dashboard.features.storedrequests');

Route::post('/dashboard/requestbuilder', 'Dashboard\RequestBuilderController@store');
