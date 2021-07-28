<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::all();
        $data['karyawan'] = $karyawans;
        return view('karyawan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'karyawan.store';
        return view('karyawan.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawan = new Karyawan;
        $karyawan->nama =$request->nama;
        $karyawan->alamat =$request->alamat;
        $karyawan->no_hp =$request->no_hp;
        $karyawan->email =$request->email;
        $karyawan->jabatan =$request->jabatan;
        $karyawan->save();
        return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $karyawan = Karyawan::find($id);
        $data['karyawan'] = $karyawan;
        $data['action'] = 'karyawan/update';
        return view('karyawan.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan = Karyawan::find($request->id);
        $karyawan->nama =$request->nama;
        $karyawan->alamat =$request->alamat;
        $karyawan->no_hp =$request->no_hp;
        $karyawan->email =$request->email;
        $karyawan->jabatan =$request->jabatan;
        $karyawan->save();
        return redirect('/karyawan');
    }

    public function delete($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }
}