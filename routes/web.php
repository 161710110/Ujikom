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

Route::get('/','FrontendController@home');
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

// Route::get('/', 'FrontendController@index');
Route::get('/shop', 'FrontendController@index');


Route::get('/contact', 'ContactController@kontak');
Route::get('/show/{slug}','FrontendController@show1');
Route::get('/kategori/{slug}','FrontendController@category')->name('isikategori');
// Route::get('/', 'FrontendController@sortby');

Route::get('/hehe', function () {
    return view('kontak.index');
});

//Artikel
Route::get('/blog', 'FrontendController@blog');
Route::get('/view-blog/{slug}','FrontendController@view1');
Route::get('/kategori-blog/{slug}','FrontendController@catblog')->name('isikategoriblog');

//cart
Route::group(['middleware'=>'auth'],function(){
    Route::get('/cart','FrontendController@cart');
    Route::get('/add-cart/{barang_id}', function($barang_id){
        // $produk = \App\Product::find($product_id);
        $exist = \App\Keranjang::where('users_id', \Auth::user()->id)->where('barang_id',$barang_id)->first();
        if($exist){
            $exist->jumlah = $exist->jumlah + 1;
            $exist->save(); 
        }else{    
            $data = new \App\Keranjang;
            $data->barang_id = $barang_id;
            $data->jumlah = 1;
            $data->users_id = \Auth::user()->id;
            $data->save();
       
        }
        return redirect()->back();
    });
     Route::get('cart/{users_id}', function ($users_id) {
        $mycart = \App\Keranjang::all();
        $contact = \App\Contact::all();
        return view('home.cart', compact('mycart','contact'));
    });
    Route::get('cart/delete/{id}', function ($id) {
        $cart = \App\Keranjang::find($id)->delete();
        return redirect()->back();
    });
    Route::post('cart/edit/{users_id}', function ( \Illuminate\Http\Request $request, $user_id) {
        for($i = 0; $i < count($request->id); $i++){
            $cart = \App\Keranjang::find($request->id[$i]);
            $cart->jumlah = $request->jumlah[$i];
            $cart->save();
        }
        return redirect()->back();
    });
        
    Route::get('check/{user_id}', function ($user_id) {
        $cart = \App\Keranjang::all();
        $barang = \App\Barang::orderBy('created_at','desc')->paginate(5);
        $katbar = \App\KategoriBarang::all();
        $merk = \App\Merk::all();
        $art = \App\Artikel::all();
        $fotbar = \App\FotoBarang::all();
        return view('home.checkout', compact('barang','katbar','merk','art','fotbar','cart'));
    });

    Route::post('checkout/{user_id}',function( \Illuminate\Http\Request $request, $user_id){
        $request->validate([
            'nama' => 'required|',
            'nama_lengkap' => 'required|',
            'email' => 'required|',
            'hp' => 'required|',
            'alamat' => 'required|',
            'provinsi' => 'required|',
            'kota' => 'required|',
            'kodepos' => 'required|',
        ]);
        // dd(json_decode($request->chart));
        foreach(json_decode($request->chart) as $data){
            $checkout = new \App\Pembayaran;
            $checkout->nama = $request->nama;
            $checkout->nama_lengkap = $request->nama_lengkap;
            $checkout->email = $request->email;
            $checkout->hp = $request->hp;
            $checkout->alamat = $request->alamat;
            $checkout->provinsi = $request->provinsi;
            $checkout->kota = $request->kota;
            $checkout->kodepos = $request->kodepos;
            $checkout->barang_id = $data->barang_id;
            $checkout->user_id = \Auth::user()->id;
            
            $checkout->save();
        }

        $del = \App\Keranjang::where('users_id', $user_id)->delete();

        return redirect()->back();
        
    });

    Route::get('sort','FrontendController@sort');
});