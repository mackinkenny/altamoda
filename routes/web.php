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
    return view('contact');
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
Route::get('/season.admin','SeasonController@admin')->name('season.admin');
Route::get('/category.admin','CategoryController@admin')->name('category.admin');
//end admin routes

//catalog routes
Route::get('/cloth.catalog/{id}','ClothController@catalog')->name('cloth.catalog');
Route::get('/showroom.catalog/{id}','ShowroomController@catalog')->name('showroom.catalog');
//end catalog routes

//other routes
Route::get('/clothbasket/{id}','BasketController@clothbasket')->name('clothbasket');
Route::get('/basketdelete/{id}','BasketController@delete')->name('basketdelete');
//end others

//resources//
Route::resource('cloth', 'ClothController');
Route::resource('studio', 'StudioController');
Route::resource('kind', 'KindController');
Route::resource('showroom', 'ShowroomController');
Route::resource('parameter', 'ParameterController');
Route::resource('season', 'SeasonController');
Route::resource('category', 'CategoryController');
Route::resource('basket', 'BasketController');
//end resources

//datatables//
Route::get('datatable/getclothes', 'AdminController@getClothes')->name('datatable.getclothes');
Route::get('datatable/getkinds', 'AdminController@getKinds')->name('datatable.getkinds');
Route::get('datatable/getparameters', 'AdminController@getParameters')->name('datatable.getparameters');
Route::get('datatable/getshowrooms', 'AdminController@getShowrooms')->name('datatable.getshowrooms');
Route::get('datatable/getseasons', 'AdminController@getSeasons')->name('datatable.getseasons');
Route::get('datatable/getcategoryes', 'AdminController@getCategoryes')->name('datatable.getcategoryes');
//end datatables