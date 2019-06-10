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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/cloth', function () {
//    return view('cloth');
//})->name('cloth');
//Route::get('/cloth', 'HomeController@cloth')->name('cloth');
Route::get('/clothes', function () {
    return view('cloth.list');
});

Route::get('/showroom', function () {
    return view('showroom');
});

Route::get('/studio', function () {
    return view('studio');
});

Route::get('/admin', function ()
{
   return view('admin.login');
});

//Route::get('/admin', function ()
//{
//    return view('admin.admin');
//});

//resources//
Route::resource('cloth', 'ClothController');

//datatables//
Route::get('datatable/getclothes', 'AdminController@getClothes')->name('datatable.getclothes');