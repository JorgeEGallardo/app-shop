<?php
use App\Http\Controllers\TestController;

Route::get('/', 'TestController@welcome');
Route::get('/xd', function () {
    return "<h1>xd</h1>";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
