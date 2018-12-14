<?php

namespace App\Http\Controllers;

use App\Merk;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        $data = Merk::all();
        return Datatables::of($data)
        ->addColumn('foto', function($data){
                if ($data->foto == NULL){
                    return 'No Image!';
                }
                return '<img class="img-thumbnail" style="width :200px ; height :100px" src="'. url($data->foto) .'?'.time().'" alt="">';
            })

        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
            })
            ->rawColumns(['action','foto'])->make(true);
    }
    public function index()
    {   
        return view('merk.index');
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
            'nama_merk'=>'required',
            'foto'=>'required'
        ],[
            'nama_merk.required'=>'Nama Merk tidak boleh kosong',
    ]);
            $data = new Merk;
            $data->nama_merk = $request->nama_merk;
            $data['foto'] = null;
            if ($request->hasFile('foto')){
            $data['foto'] = '/upload/'.str_slug($data['nama_merk'], '-').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/upload/'), $data['foto']);
            }
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Merk::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_merk'=>'required',
            'foto'=>'required'
        ],[
            'nama_merk.required'=>'Nama Merk tidak boleh kosong',
            'foto.required'=>'foto tidak boleh kosong'
    ]);
            $data = Merk::find($id);
            $data->nama_merk = $request->nama_merk;
            $data['foto'] = null;
            if ($request->hasFile('foto')){
            $data['foto'] = '/upload/'.str_slug($data['nama_merk'], '-').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/upload/'), $data['foto']);
            }
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Merk::find($request->input('id'));
        if($data->delete())
        {
            echo 'Data Deleted';
        }
    }
}
