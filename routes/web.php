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
    return view('temp');
});
Route::get('/tes', function () {
    return view('layouts.frontend');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'/','middleware'=>['auth','role:admin']], function(){
	//Contact
	Route::resource('kontak', 'ContactController');
	Route::get('a', 'ContactController@json');
	Route::get('del_a', 'ContactController@destroy')->name('del_a');
	Route::post('add_a', 'ContactController@store');
	Route::get('edita/{id}', 'ContactController@edit');
	Route::post('a/edit/{id}', 'ContactController@update');

	//Merk
	Route::resource('merk', 'MerkController');
	Route::get('b', 'MerkController@json');
	Route::get('del_b', 'MerkController@destroy')->name('del_b');
	Route::post('add_b', 'MerkController@store');
	Route::get('editb/{id}', 'MerkController@edit');
	Route::post('b/edit/{id}', 'MerkController@update');

	//Kategori Artikel 
	Route::resource('kategoriartikel', 'KategoriArtikelController');
	Route::get('c', 'KategoriArtikelController@json');
	Route::get('del_c', 'KategoriArtikelController@destroy')->name('del_c');
	Route::post('add_c', 'KategoriArtikelController@store');
	Route::get('editc/{id}', 'KategoriArtikelController@edit');
	Route::post('c/edit/{id}', 'KategoriArtikelController@update');

	//Artikel 
	Route::resource('artikel', 'ArtikelController');
	Route::get('e', 'ArtikelController@json');
	Route::get('del_e', 'ArtikelController@destroy')->name('del_e');
	Route::post('add_e', 'ArtikelController@store');
	Route::get('edite/{id}', 'ArtikelController@edit');
	Route::post('e/edit/{id}', 'ArtikelController@update');
	// Route::get('/read/{slug}', 'ArtikelController@show');

	//Kategori Barang
	Route::resource('kategoribarang', 'KategoriBarangController');
	Route::get('d', 'KategoriBarangController@json');
	Route::get('del_d', 'KategoriBarangController@destroy')->name('del_d');
	Route::post('add_d', 'KategoriBarangController@store');
	Route::get('editd/{id}', 'KategoriBarangController@edit');
	Route::post('d/edit/{id}', 'KategoriBarangController@update');

	//Foto Barang
	Route::resource('fotobarang', 'FotoBarangController');
	Route::get('f', 'FotoBarangController@json');
	Route::get('del_f', 'FotoBarangController@destroy')->name('del_f');
	Route::post('add_f', 'FotoBarangController@store');
	Route::get('editf/{id}', 'FotoBarangController@edit');
	Route::post('f/edit/{id}', 'FotoBarangController@update');

	//Barang
	Route::resource('barang', 'BarangController');
	Route::get('g', 'BarangController@json');
	Route::get('del_g', 'BarangController@destroy')->name('del_g');
	Route::post('add_g', 'BarangController@store');
	Route::get('editg/{id}', 'BarangController@edit');
	Route::post('g/edit/{id}', 'BarangController@update');
});
