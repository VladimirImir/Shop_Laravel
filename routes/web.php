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

Route::get('/', 'MainController@index' );
Route::get('/categories', 'MainController@categories' );
Route::get('/mobiles/iphone_x_64', 'MainController@product' );


/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/', function () {
//    return view('index');
//});


/*Route::get('/categories', function () {
    return view('categories');
});*/
/*Route::get('/mobiles/iphone_x_64', function () {
    return view('product');
});*/
