<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesi;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('backend.sesi_index')->withSesis(Sesi::all()); 
    }
    /** Sesi::all = select * from sesi= shorthand
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.sesi_add')->withSesi(new Sesi); //send variable ke view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'pingat' =>'required',
        ]);

        $request['status'] = $request->status =='on' ? true : false; //short hand utk if else sbb boolean
        Sesi:: create($request->only('name','pingat','status')); //dd= mcm var dumps

        return back()->withSuccess('Data anda dah masuk'); // with tu mcm session dia pegang sbb nak back balik
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.sesi_show')->withSesi(Sesi::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('backend.sesi_edit')->withSesi( Sesi::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'pingat' =>'required',
        ]);

        $request['status'] = $request->status =='on' ? true : false; //short hand utk if else sbb boolean
        Sesi:: where('id',$id)->update($request->only('name','pingat','status')); //dd= mcm var dumps

        return redirect()->route('sesi.index')->withSuccess('Data dah update'); // with tu mcm session dia pegang sbb nak back balik
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
