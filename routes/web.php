<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/abc', function (Request $request) {
    dd('abc');
});

Route::get('/cdf', function () {
    return view('cdf');
});


Route::get('/index', 'ProductController@index') ;
Route::get('/product/show/{id}', 'ProductController@show') ;

//create form
Route::get('/product/create', 'ProductController@create') ;

//create store luu tru
Route::post('/product/store', 'ProductController@store') -> name("product-store") ;

//show
Route::get('/product/show/{id}', 'ProductController@show') -> name("product-show") ;

//update form
Route::post('/product/update', 'ProductController@update') -> name("product-update") ;

//delete form
Route::get('/product/delete/{id}', 'ProductController@delete') -> name("product-delete") ;


