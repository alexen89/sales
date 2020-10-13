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

Route::get('/admin', 'AdminController@index')->name('admin.home');


Route::resource('units', 'UnitsController')->only('index', 'store');


Route::resource('units', 'UnitsController')->only('index', 'store');


Route::get('/sales', 'SalesController@index')->name('sales.home');

Route::get('/adminproduct', 'AdminProductController@index');
Route::get('/createProduct', 'AdminProductController@createProduct')->name('admin.product.home');
Route::post('/productAdd', 'AdminProductController@productAdd');
Route::post('/loadProduct', 'AdminProductController@loadProduct');



Route::get('/adminsales', 'AdminSalesController@index')->name('admin.sales.home');

