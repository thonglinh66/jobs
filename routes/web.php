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
    Route::get('/', 'AcountController@index')->middleware('checkUser');// maked    
    Route::get('/{id}', 'AcountController@index')->name('acount.index');// maked    
    Route::get('/add', 'AcountController@add')->name('acount.add');// maked     
    Route::post('/add_submit', 'AcountController@add_submit')->name('acount.add_submit');
    Route::get('/edit/{id}', 'AcountController@edit')->name('acount.edit');
    Route::post('/update/{id}', 'AcountController@update')->name('acount.update');
    Route::post('/delete/{id}', "AcountController@delete")->name('acount.delete');
});
Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@index')->middleware('checkUser');// maked 
    Route::get('/{id}', 'HomeController@index')->name('post.index');// maked 
    Route::get('/inforpost', 'HomeController@post')->name('home.inforpost');// maked 
    Route::get('/about', 'HomeController@about')->name('home.about');
    Route::get('/jobsingle/{id}', 'HomeController@jobsingle')->name('home.jobsingle');
    Route::get('/contact', 'HomeController@contact')->name('home.contact');
    Route::get('/joblistings', 'HomeController@joblistings')->name('home.joblistings');
    // Route::post('/add_submit', 'AcountController@add_submit')->name('acount.add_submit');
    // Route::get('/edit/{id}', 'AcountController@edit')->name('acount.edit');
    // Route::post('/update/{id}', 'AcountController@update')->name('acount.update');
    // Route::post('/delete/{id}', "AcountController@delete")->name('acount.delete');
});
Auth::routes();
Route::group(['middleware' => ['checkLogin']], function () {
    Route::prefix('business')->group(function () {
        Route::get('/', 'BusinessController@index')->middleware('checkUser');
        Route::get('/{id}', 'BusinessController@index')->name('business.index');
        // Route::get('/add', 'AcountController@add')->name('acount.add');
        // Route::post('/add_submit', 'AcountController@add_submit')->name('acount.add_submit');
        Route::get('/{id}/upload', 'BusinessController@upload')->name('business.upload');
        Route::post('/upload', 'BusinessController@post')->name('business.post.upload');
        Route::get('/jobsingle/{id}', 'BusinessController@jobsingle')->name('business.jobsingle');
    });
});
// Route::get('/business', 'BusinessController@index')->middleware('checkLogin');
Auth::routes();
Route::get('/login', 'LoginController@getAuthLogin')->middleware('checkUser');
Route::post('/login', 'LoginController@postAuthLogin')->name('login');
Route::get('/logout', 'LoginController@postAuthLogout')->name('logout');
