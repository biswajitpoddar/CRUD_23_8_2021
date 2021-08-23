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

Route::get('postinsert', 'App\Http\Controllers\HomeController@ajaxRequest');
Route::post('postinsert', 'App\Http\Controllers\HomeController@ajaxRequestPost');
