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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'ProductController@home');
Route::get('/admin','ProductController@index');

//  Route::get('/products/trinh', function(){
//      return view('products/trinh');
//  });

 
Route::resource('products','ProductController');
Route::resource('categories','CategoryController');