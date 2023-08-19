<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/test2', function () {
    return view('test2');
});
Route::get('/home', function () {
    echo '<h1>Home</h1>';
});


//use Illuminate\Http\Request; (xai phien ban Request nay)
//http://127.0.0.1:8000/product?name=nghia (lay gia tri tu link)
Route::get('/product', function (Request $request) {
    echo '<h1>Product</h1>'. $request->query('name');
});

//http://127.0.0.1:8000/product/ditail/1/nghia  (name co cung duoc khog co cung dc)
//http://127.0.0.1:8000/product/ditail/1
Route::get('/product/ditail/{id}/{name?}', function ($id, $name='') {
    echo '<h1>Product ditail:</h1>'.$id. $name;
});
