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

$clientRoute = 'App\Http\Controllers\ClientController';
$serviceRoute = 'App\Http\Controllers\ServiceController';

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Clients Routes
Route::get('/clients', "$clientRoute@index");
Route::post('/clients', "$clientRoute@store");
Route::get('/clients/{client}', "$clientRoute@show"); //{client} == {id}
Route::put('/clients/{client}', "$clientRoute@update");
Route::delete('/clients/{client}', "$clientRoute@destroy");

//Services Routes
Route::get('/services', "$serviceRoute@index");
Route::post('/services', "$serviceRoute@store");
Route::get('/services/{service}', "$serviceRoute@show"); //{service} == {id}
Route::put('/services/{service}', "$serviceRoute@update");
Route::delete('/services/{service}', "$serviceRoute@destroy");

//Services Routes
Route::post('/clients/services', "$clientRoute@attach");
