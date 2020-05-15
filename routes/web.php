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
    Route::get('/', 'AcountController@index')->name('acount.index');// maked    
    Route::get('/add', 'AcountController@add')->name('acount.add');// maked     
    Route::post('/add_submit', 'AcountController@add_submit')->name('acount.add_submit');
    Route::get('/edit/{id}', 'AcountController@edit')->name('acount.edit');
    Route::post('/update/{id}', 'AcountController@update')->name('acount.update');
    Route::post('/delete/{id}', "AcountController@delete")->name('acount.delete');
});
Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@index')->name('post.index');// maked 
    Route::get('/inforpost', 'HomeController@post')->name('home.inforpost');// maked 
    Route::get('/about', 'HomeController@about')->name('home.about');
    Route::get('/jobsingle', 'HomeController@job-single')->name('home.jobsingle');
    Route::get('/contact', 'HomeController@contact')->name('home.contact');
    // Route::post('/add_submit', 'AcountController@add_submit')->name('acount.add_submit');
    // Route::get('/edit/{id}', 'AcountController@edit')->name('acount.edit');
    // Route::post('/update/{id}', 'AcountController@update')->name('acount.update');
    // Route::post('/delete/{id}', "AcountController@delete")->name('acount.delete');
});
Route::prefix('business')->group(function () {
    Route::get('/', 'BusinessController@index')->name('business.index');// maked 
    // Route::get('/add', 'AcountController@add')->name('acount.add');
    // Route::post('/add_submit', 'AcountController@add_submit')->name('acount.add_submit');
    Route::get('/login', 'BusinessController@login')->name('acount.edit');
    Route::get('/upload', 'BusinessController@upload')->name('business.upload');// maked 
    Route::post('/uploadpost', 'BusinessController@store')->name('addinfor');
});
Route::get('/Login', 'LoginController@getAuthLogin');// maked 
Route::post('/Login', 'LoginController@postAuthLogin')->name('login');
