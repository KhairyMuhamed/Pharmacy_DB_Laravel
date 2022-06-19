<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use apphttp\Controllers\drugscontroller;
//use app\http\Controllers\salesprocesscontroller;
//use app\http\Controllers\patient_controller;
//use app\http\Controllers\pharmacy_controller;
//use app\http\Controllers\prescription_controller;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/drugs', [drugscontroller::class,'store']);
//Route::get('/drugs',[drugscontroller::class,'index']);
//Route::update('/drugs', 'App\Http\Controllers\drugscontroller@update');
//Route::delete('/drugs/{id}', 'App\Http\Controllers\drugscontroller@delete');
 
 //Route::post('/salesprocess', 'App\Http\Controllers\salesprocesscontroller@create');
//Route::get('/salesprocess', 'App\Http\Controllers\salesprocesscontroller@index');
//Route::update('/salesprocess', 'App\Http\Controllers\salesprocesscontroller@update');
//Route::delete('/salesprocess', 'App\Http\Controllers\salesprocesscontroller@delete');

//Route::post('/prescription', 'App\Http\Controllers\prescription_controller@create');
//Route::get('/prescription', 'App\Http\Controllers\prescription_controller@index');
//Route::update('/prescription', 'App\Http\Controllers\prescription_controller@update');
//Route::delete('/prescription', 'App\Http\Controllers\prescription_controller@delete');


//Route::post('/pharmacy', 'App\Http\Controllers\pharmacy_controller@create');
//Route::get('/pharmacy', 'App\Http\Controllers\pharmacy_controller@index');
//Route::update('/pharmacy', 'App\Http\Controllers\pharmacy_controller@update');
//Route::delete('/pharmacy', 'App\Http\Controllers\pharmacy_controller@delete');


//Route::post('/patient', 'App\Http\Controllers\patient_controller@create');
//Route::get('/patient', 'App\Http\Controllers\patient_controller@index');
//Route::update('/patient', 'App\Http\Controllers\patient_controller@update');
//Route::delete('/patient', 'App\Http\Controllers\patient_controller@delete'); 