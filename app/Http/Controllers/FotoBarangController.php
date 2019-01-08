<?php

namespace App\Http\Controllers;

use App\FotoBarang;
use App\Barang;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class FotoBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        $data = FotoBarang::all();
        return DataTables::of($data)
        ->addColumn('barang',function($data){
            return $data->barang->nama_barang;
        })
        ->addColumn('foto', function($data){
                if ($data->foto == NULL){
                    return 'No Image!';
                }
                return '<img style="width :175px ; height :150px" src="'. url($data->foto) .'?'.time().'" alt="" class="img-md rounded">';
            })

        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
        })
        ->rawColumns(['action','foto','barang'])->make(true);
    }
    public function index()
    {
        $barang = Barang::all();
        return view('foto_barang.index', compact('barang'));
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
            'foto' => 'required',
            'barang_id' => 'required'
        ],[
            'foto.required' => 'Foto  Tidak Boleh Kosong',
            'barang_id.required' => 'Barang  Tidak Boleh Kosong'
        ]);
        $data = new FotoBarang;
        $data['foto'] = null;
            if ($request->hasFile('foto')){
            $data['foto'] = '/upload/'.str_slug($data['barang_id'], '-').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/upload/'), $data['foto']);
            }
        $data->barang_id = $request->barang_id;
        $data->save();
        return response()->json(['success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FotoBarang  $fotoBarang
     * @return \Illuminate\Http\Response
     */
    public function show(FotoBarang $fotoBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FotoBarang  $fotoBarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FotoBarang::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FotoBarang  $fotoBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'foto'=>'required',
            'barang_id'=>'required'
        ],[
            'foto.required'=>'Foto tidak boleh kosong',
            'barang_id.required'=>'Barang tidak boleh kosong'
    ]);
            $data = FotoBarang::find($id);
            $data['foto'] = null;
            if ($request->hasFile('foto')){
            $data['foto'] = '/upload/'.str_slug($data['barang_id'], '-').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/upload/'), $data['foto']);
            }
            $data->barang_id = $request->barang_id;
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FotoBarang  $fotoBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = FotoBarang::find($request->input('id'));
        if($data->delete())
        {
            echo 'Data Deleted';
        }
    }
}
