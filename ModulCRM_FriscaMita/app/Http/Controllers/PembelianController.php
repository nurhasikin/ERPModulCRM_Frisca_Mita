<?php

namespace App\Http\Controllers;

use App\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = Pembelian::all();
        $data['pembelian'] = $pembelian;
        return view('pembelian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'pembelian.store';
        return view('pembelian.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelian = new Pembelian;
        $pembelian->nama_pelanggan =$request->nama_pelanggan;
        $pembelian->tgl_transaksi =$request->tgl_transaksi;
        $pembelian->jenis_unit =$request->jenis_unit;
        $pembelian->status =$request->status;
        $pembelian->save();
        return redirect('/pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $pembelian = Pembelian::find($id);
        $data['pembelian'] = $pembelian;
        $data['action'] = 'pembelian/update';
        return view('pembelian.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pembelian = Pembelian::find($request->id);
        $pembelian->nama_pelanggan =$request->nama_pelanggan;
        $pembelian->tgl_transaksi =$request->tgl_transaksi;
        $pembelian->jenis_unit =$request->jenis_unit;
        $pembelian->status =$request->status;
        $pembelian->save();
        return redirect('/pembelian');
    }

    public function delete($id = " ")
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();
        return redirect('/pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }
}