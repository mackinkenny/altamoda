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
Route::resource('studio', 'StudioController');
Route::resource('showroom', 'ShowroomController');
Route::get('/cloth.catalog','ClothController@catalog');

Route::get('/clothes', function()
{
   return view('cloth.cloth');
});

Route::get('/studios', function()
{
    return view('studio.studio');
});

Route::get('/showrooms', function()
{
    return view('showroom.showroom');
});

//datatables//
Route::get('datatable/getclothes', 'AdminController@getClothes')->name('datatable.getclothes');
Route::get('datatable/getstudios', 'AdminController@getStudios')->name('datatable.getstudios');
