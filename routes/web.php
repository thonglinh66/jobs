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

Route::prefix('account')->group(function () {
    Route::get('/', 'AccountController@index')->name('account.index');// maked    
    Route::get('/add', 'AccountController@add')->name('account.add');// maked     
    Route::post('/add_submit', 'AccountController@add_submit')->name('account.add_submit');
    Route::get('/edit/{id}', 'AccountController@edit')->name('account.edit');
    Route::post('/update/{id}', 'AccountController@update')->name('account.update');
    Route::post('/delete/{id}', "AccountController@delete")->name('account.delete');
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
        Route::get('/upload/{id}', 'BusinessController@upload')->name('business.upload');
        Route::post('/upload', 'BusinessController@post')->name('business.post.upload');
        Route::delete('/delete/{id}', 'BusinessController@destroy')->name('business.post.delete');;
        Route::get('/jobsingle/{id}', 'BusinessController@jobsingle')->name('business.jobsingle');
        Route::get('/update/{id}', 'BusinessController@update')->name('business.post.update');
        Route::get('/updatepost/{id}', 'BusinessController@updatepost')->name('business.update.post');
        Route::post('/updatepost/{id}', 'BusinessController@postupdatepost')->name('business.post.update.post');
        Route::get('/addpost/{id}', 'BusinessController@addpost')->name('business.add.post');
        Route::post('/addpost/{id}', 'BusinessController@postaddpost')->name('business.post.add.post');
    });
});
// Route::get('/business', 'BusinessController@index')->middleware('checkLogin');
Auth::routes();
Route::get('/login', 'LoginController@getAuthLogin')->middleware('checkUser');
Route::post('/login', 'LoginController@postAuthLogin')->name('login');
Route::get('/logout', 'LoginController@postAuthLogout')->name('logout');
