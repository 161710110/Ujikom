<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json(){
        $data = Contact::all();
        return Datatables::of($data)
        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function index()
    {
        return view('kontak.index');
    }

    public function kontak()
    {
        $kontak = Contact::all();
        return view('home.kontak', compact('kontak'));
    }

    public function head()
    {
        $kontak = Contact::all();
        return view('inc.header', compact('kontak'));
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
            'alamat'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ],[
            'alamat.required'=>'Alamat tidak boleh kosong',
            'phone.required'=>'Nomor Handphone tidak boleh kosong',
            'email.required'=>'Email tidak boleh kosong'
    ]);
            $data = new Contact;
            $data->alamat = $request->alamat;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Contact::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'alamat'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ],[
            'alamat.required'=>'Alamat tidak boleh kosong',
            'phone.required'=>'Nomor Handphone tidak boleh kosong',
            'email.required'=>'Email tidak boleh kosong'
    ]);
            $data = Contact::find($id);
            $data->alamat = $request->alamat;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Contact::find($request->input('id'));
        if($data->delete())
        {
            echo 'Data Deleted';
        }
    }
}
