<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        $data['pelanggan'] = $pelanggan;
        return view('pelanggan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'pelanggan.store';
        return view('pelanggan.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggan;
        $pelanggan->nama_pelanggan =$request->nama_pelanggan;
        $pelanggan->no_tlpn =$request->no_tlpn;
        $pelanggan->tgl_lahir =$request->tgl_lahir;
        $pelanggan->jejak_interaksi =$request->jejak_interaksi;
        $pelanggan->segmentasi_pelanggan =$request->segmentasi_pelanggan;
        $pelanggan->perilaku_pelanggan =$request->perilaku_pelanggan;
        $pelanggan->save();
        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        $pelanggan = Pelanggan::find($pelanggan->id);
        $data['pelanggan'] = $pelanggan;
        $data['action'] = 'pelanggan/update/';
        return view('pelanggan.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id);
        $pelanggan->nama_pelanggan =$request->nama_pelanggan;
        $pelanggan->no_tlpn =$request->no_tlpn;
        $pelanggan->tgl_lahir =$request->tgl_lahir;
        $pelanggan->jejak_interaksi =$request->jejak_interaksi;
        $pelanggan->segmentasi_pelanggan =$request->segmentasi_pelanggan;
        $pelanggan->perilaku_pelanggan =$request->perilaku_pelanggan;
        $pelanggan->save();
        return redirect('/pelanggan');
    }

    public function delete($id = " ")
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        //
    }
}
