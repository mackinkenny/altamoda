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

//Other routes
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
//end other routes


//admin routes
Route::get('/admin', function ()
{
    return view('admin.login');
});
Route::get('/cloth.admin','ClothController@admin')->name('cloth.admin');
Route::get('/studio.admin','StudioController@admin')->name('studio.admin');
Route::get('/kind.admin','KindController@admin')->name('kind.admin');
Route::get('/showroom.admin','ShowroomController@admin')->name('showroom.admin');
Route::get('/parameter.admin','ParameterController@admin')->name('parameter.admin');
//end admin routes

//catalog routes
Route::get('/cloth.catalog/{id}','ClothController@catalog')->name('cloth.catalog');
//end catalog routes



//resources//
Route::resource('cloth', 'ClothController');
Route::resource('studio', 'StudioController');
Route::resource('kind', 'KindController');
Route::resource('showroom', 'ShowroomController');
Route::resource('parameter', 'ParameterController');
Route::resource('season', 'SeasonController');
//end resources

//datatables//
Route::get('datatable/getclothes', 'AdminController@getClothes')->name('datatable.getclothes');
Route::get('datatable/getkinds', 'AdminController@getKinds')->name('datatable.getkinds');
Route::get('datatable/getparameters', 'AdminController@getParameters')->name('datatable.getparameters');
Route::get('datatable/getshowrooms', 'AdminController@getShowrooms')->name('datatable.getshowrooms');
//end datatables