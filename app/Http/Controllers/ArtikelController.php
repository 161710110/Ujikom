<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        $data = Artikel::all();
        return DataTables::of($data)
        ->addColumn('kategori',function($data){
            return $data->kategoriartikel->nama_kategori;
        })
        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
        })
        ->rawColumns(['action','kategori'])->make(true);
    }
    public function index()
    {
        $kategori_artikel = KategoriArtikel::all();
        return view('artikel.index', compact('kategori_artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'cover' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required',
            'slug' => 'required'
        ],[
            'judul.required' => 'Judul  Tidak Boleh Kosong',
            'cover.required' => 'Cover  Tidak Boleh Kosong',
            'isi.required' => 'Isi  Tidak Boleh Kosong',
            'penulis.required' => 'Penulis  Tidak Boleh Kosong',
            'tanggal.required' => 'tanggal  Tidak Boleh Kosong',
            'slug.required' => 'slug  Tidak Boleh Kosong'
        ]);
        $data = new Artikel;
        $data->judul = $request->judul;
        $data->cover = $request->cover;
        $data->isi = $request->isi;
        $data->penulis = $request->penulis;
        $data->tanggal = $request->tanggal;
        $data->kategori_id = $request->kategori_id;
        $data->slug = str_slug($request->judul);
        $data->save();
        return response()->json(['success'=>true]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Artikel::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'=>'required',
            'cover'=>'required',
            'isi'=>'required',
            'penulis'=>'required',
            'tanggal'=>'required'
        ],[
            'judul.required'=>'Judul tidak boleh kosong',
            'cover.required'=>'cover tidak boleh kosong',
            'isi.required'=>'isi tidak boleh kosong',
            'penulis.required'=>'penulis tidak boleh kosong',
            'tanggal.required'=>'tanggal tidak boleh kosong',
    ]);
            $data = Artikel::find($id);
            $data->judul = $request->judul;
            $data->cover = $request->cover;
            $data->isi = $request->isi;
            $data->penulis = $request->penulis;
            $data->tanggal = $request->tanggal;
            $data->slug = str_slug($request->judul);
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = KategoriArtikel::find($request->input('id'));
        if($data->delete())
        {
            echo 'Data Deleted';
        }
    }
}
