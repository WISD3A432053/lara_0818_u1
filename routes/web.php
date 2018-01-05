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

Route::auth();

use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tracy', function () {
    throw new \exception('Tracy works!');
});


Route::get('/middleware', function () {
    return view('welcome');
})->middleware(CheckAge::class);

Route::get('mail','MailController@getSend');

Route::get('/home',['as'=>'home',function(){
    return view('home');
}]);





