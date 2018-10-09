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

// Route::middleware(['auth'])->group(function (){

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/admin/rw', 'RwController@index')->name('rw.index');
Route::get('/admin/rw/add','RwController@create')->name('rw.create');
Route::post('/admin/rw/add','RwController@store')->name('rw.store');

Route::get('/admin/rt', 'RtController@index')->name('rt.index');
Route::get('/admin/rt/add','RtController@create')->name('rt.create');
Route::post('/admin/rt/add','RtController@store')->name('rt.store');


// });

Auth::routes();