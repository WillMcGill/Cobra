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

Route::get('/move', 'MoveController@sendEmail');
Route::get('/check', 'CheckController@show');
    
Route::get("/email", function() {
    Mail::raw('Now I know how to send emails with Laravel', function($message)
     {
         $message->subject('Hi There!!');
         $message->from('mcgill.will@yahoo.com');
         $message->to('mcgill.will@yahoo.com');
     });
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
