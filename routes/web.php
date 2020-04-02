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

Route::get('/users', 'UserController@index');
Route::get('/users/add','UserController@addForm');


Route::get('/products', 'ProductController@index'); // list of products
Route::get('/products/{id}/edit', 'ProductController@editForm'); // edit  product
Route::post('/products/{id}/edit', 'ProductController@saveEdit');
Route::get('/products/add', 'ProductController@addForm'); // show form
Route::post('/products/add', 'ProductController@postAdd'); // save data when submit form / handler
Route::post('/products/delete', 'ProductController@destroy');



