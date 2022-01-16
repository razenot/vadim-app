<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

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


Route::get('/first/', function () {
    return view('first');
})->middleware('fos');


Route::get('/second/', function () {
    return view('second');
});

Route::post('delsigning', function () {
    $response = new Illuminate\Http\Response('ok');
    $cookie = Cookie::forever('signing', "N");
    return $response->withCookie($cookie);
});

Route::post('addsigning', function () {
    $response = new Illuminate\Http\Response('ok');
    $cookie = Cookie::forever('signing', "Y");
    return $response->withCookie($cookie);
});