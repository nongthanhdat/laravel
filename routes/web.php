<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('category')->group(function () {
    Route::get('', [
    'as' => 'list-category',
        'uses' => 'CategoryController@index'
    ]);
    Route::get('/create', [
        'as' => 'create-category',
        'uses' => 'CategoryController@create'
    ]);
    Route::post('/store',[
        'as' => 'store-category',
        'uses' => 'CategoryController@store'
    ]);
});

Route::prefix('user')->group(function () {
    Route::get('', [
        'as' => 'list-user',
        'uses' => 'UserController@index'
    ]);
    Route::get('delete/{id}', [
        'as' => 'delete-user',
        'uses' => 'UserController@destroy'
    ]);
    Route::get('/create', [
        'as' => 'create-user',
        'uses' => 'UserController@create'
    ]);
    Route::post('/store', [
        'as' => 'store-user',
        'uses' => 'UserController@store'
    ]);
});

