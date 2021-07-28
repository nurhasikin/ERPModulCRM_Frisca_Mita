<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensis = Absensi::all();
        $data['absensi'] = $absensis;
        return view('absensi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'absensi.store';
        return view('absensi.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absensi = new Absensi;
        $absensi->id_karyawan =$request->id_karyawan;
        $absensi->tanggal_absensi =$request->tanggal_absensi;
        $absensi->status_kehadiran =$request->status_kehadiran;
        $absensi->save();
        return redirect('/absensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $absensi = Absensi::find($id);
        $data['absensi'] = $absensi;
        $data['action'] = 'absensi/update';
        return view('absensi.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $absensi = Absensi::find($request->id);
        $absensi->id_karyawan =$request->id_karyawan;
        $absensi->tanggal_absensi =$request->tanggal_absensi;
        $absensi->status_kehadiran =$request->status_kehadiran;
        $absensi->save();
        return redirect('/absensi');
    }

    public function delete($id)
    {
        $absensi = Absensi::find($id);
        $absensi->delete();
        return redirect('/absensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}