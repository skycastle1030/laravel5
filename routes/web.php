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
    //echo 'this is first page';
    return view('welcome');
});
//Route::get('/home/index/getCityName','Home\IndexController@getCityName');
Route::group(['prefix'=>'home/index'], function () {
    Route::get('getCityName', 'Home\IndexController@getCityName');
    //return view('welcome');
});
