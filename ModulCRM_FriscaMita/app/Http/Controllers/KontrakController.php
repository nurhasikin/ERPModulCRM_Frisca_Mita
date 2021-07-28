<?php

namespace App\Http\Controllers;

use App\Kontrak;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontraks = Kontrak::all();
        $data['kontrak'] = $kontraks;
        return view('kontrak.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'kontrak.store';
        return view('kontrak.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontrak = new Kontrak;
        $kontrak->jenis_karyawan =$request->jenis_karyawan;
        $kontrak->lama_kontrak =$request->lama_kontrak;
        $kontrak->tanggal_bekerja =$request->tanggal_bekerja;
        $kontrak->tanggal_pensiun =$request->tanggal_pensiun;
        $kontrak->id_karyawan =$request->id_karyawan;
        $kontrak->save();
        return redirect('/kontrak');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontrak $kontrak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $kontrak = Kontrak::find($id);
        $data['kontrak'] = $kontrak;
        $data['action'] = 'kontrak/update';
        return view('kontrak.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontrak $kontrak)
    {
        $kontrak = Kontrak::find($request->id);
        $kontrak->jenis_karyawan =$request->jenis_karyawan;
        $kontrak->lama_kontrak =$request->lama_kontrak;
        $kontrak->tanggal_bekerja =$request->tanggal_bekerja;
        $kontrak->tanggal_pensiun =$request->tanggal_pensiun;
        $kontrak->id_karyawan =$request->id_karyawan;
        $kontrak->save();
        return redirect('/kontrak');
    }

    public function delete($id)
    {
        $kontrak = Kontrak::find($id);
        $kontrak->delete();
        return redirect('/kontrak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontrak $kontrak)
    {
        //
    }
}