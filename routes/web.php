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

Route::prefix('acount')->group(function () {
    Route::get('/', 'AcountController@index')->name('acount.index');
    Route::get('/add', 'AcountController@add')->name('acount.add');
    Route::post('/add_submit', 'AcountController@add_submit')->name('acount.add_submit');
    Route::get('/edit/{id}', 'AcountController@edit')->name('acount.edit');
    Route::post('/update/{id}', 'AcountController@update')->name('acount.update');
    Route::post('/delete/{id}', "AcountController@delete")->name('acount.delete');
});