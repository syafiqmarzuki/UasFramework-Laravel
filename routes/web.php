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
    return view('frontend.home');
});

Route::get('/berita', function () {
    return view('frontend.berita');
});

Route::get('/beritadetail', function () {
    return view('frontend.detailberita');
});

Route::get('/daftarpertandingan', function () {
    return view('frontend.daftarpertandingan');
});

Route::get('/galeri', function () {
    return view('frontend.galeri');
});

Route::get('/squad', function () {
    return view('frontend.squad');
});

Route::get('/squaddetail', function () {
    return view('frontend.squaddetail');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::group(['prefix' => 'category'],function (){
    Route::get('/','CategoryController@index')->name('category');
    Route::get('/tambah','CategoryController@create')->name('category.create');
    Route::post('/tambah','CategoryController@store')->name('category.store');
    Route::get('/edit/{id}','CategoryController@edit')->name('category.edit');
    Route::patch('/edit/{id}','CategoryController@update')->name('category.update');
    Route::delete('/hapus/{id}','CategoryController@destroy')->name('category.destroy');

});

Route::group(['prefix' => 'berita'],function (){
    Route::get('/','BeritaController@index')->name('berita');
    Route::get('/tambah','BeritaController@create')->name('berita.create');
    Route::post('/tambah','BeritaController@store')->name('berita.store');
    Route::get('/edit/{id}','BeritaController@edit')->name('berita.edit');
    Route::patch('/edit/{id}','BeritaController@update')->name('berita.update');
    Route::delete('/hapus/{id}','BeritaController@destroy')->name('berita.destroy');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
