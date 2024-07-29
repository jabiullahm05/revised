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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test','Jabiullahcontroller@index' );

Route::get('/abcd',function(){
    echo "welcome to jabiullah";
})->name("lgn");

Route::get('/RAh', function(){
    echo "Welcome to Rahul";
});

Route::get('/amit', function(){
    echo "Welcome to Amit";
});
Route::get('/krishna', function(){
    echo "Welcome to krishna";
});
Route::get('/dinesh', function(){
    echo "Welcome to welcome to dinesh";
});
Route::get('/ganesh', function(){
    echo "Welcome to ganesh";
});
