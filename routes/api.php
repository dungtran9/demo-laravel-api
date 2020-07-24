<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/customers', 'CustomerController@index')->name('customers.index');
Route::post('/customers/add', 'CustomerController@store')->name('customers.store');
Route::get('/customers/edit/{id}', 'CustomerController@getCustomerbyId');
Route::put('/customers/edit/{id}', 'CustomerController@update');
Route::delete('/customers/delete/{id}', 'CustomerController@delete');
