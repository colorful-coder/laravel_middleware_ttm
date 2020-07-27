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

Route::get('/test-facade', function () {
    return TestFacades::testingFacades();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile/{id}', ["uses" => "HomeController@checkMD", "middleware" => "check.email"])->name('profile');
Route::group(['middleware' => ['role']], function () {
    Route::get('/list', 'HomeController@userList');
});

Route::get('/test-for', 'HomeController@testFor');

//route resource
Route::resource('posts', 'PostController');
