<?php

namespace App\Http\Controllers;

use App\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gajis = Gaji::all();
        $data['gaji'] = $gajis;
        return view('gaji.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'gaji.store';
        return view('gaji.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gaji = new Gaji;
        $gaji->jumlah_uang =$request->jumlah_uang;
        $gaji->status_gaji =$request->status_gaji;
        $gaji->id_karyawan =$request->id_karyawan;
        $gaji->save();
        return redirect('/gaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $gaji = Gaji::find($id);
        $data['gaji'] = $gaji;
        $data['action'] = 'gaji/update';
        return view('gaji.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaji $gaji)
    {
        $gaji = Gaji::find($request->id);
        $gaji->jumlah_uang =$request->jumlah_uang;
        $gaji->status_gaji =$request->status_gaji;
        $gaji->id_karyawan =$request->id_karyawan;
        $gaji->save();
        return redirect('/gaji');
    }

    public function delete($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();
        return redirect('/gaji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji)
    {
        //
    }
}