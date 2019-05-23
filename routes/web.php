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

Route::get('/users/', function () {
    return view('welcome');
});    
//  làm sao trỏ route về controller gọi eloquent class
Route::get('/users/comments', 'UserController@returnComment');
Route::get('/users/listBuyers','UserController@returnBuyers');
Route::get('/users/listSellers','UserController@returnSellers');

