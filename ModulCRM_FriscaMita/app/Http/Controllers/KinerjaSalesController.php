<?php

namespace App\Http\Controllers;

use App\kinerjasales;
use Illuminate\Http\Request;

class KinerjaSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kinerjasales = kinerjasales::all();
        $data['kinerjasales'] = $kinerjasales;
        return view('kinerjasales.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'kinerjasales.store';
        return view('kinerjasales.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kinerjasales = new kinerjasales;
        $kinerjasales->nama_sales =$request->nama_sales;
        $kinerjasales->status_kinerja =$request->status_kinerja;
        $kinerjasales->save();
        return redirect('/kinerjasales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kinerjasales  $kinerjasales
     * @return \Illuminate\Http\Response
     */
    public function show(kinerjasales $kinerjasales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kinerjasales  $kinerjasales
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $kinerjasales = kinerjasales::find($id);
        $data['kinerjasales'] = $kinerjasales;
        $data['action'] = 'kinerjasales/update/';
        return view('kinerjasales.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kinerjasales  $kinerjasales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $kinerjasales = kinerjasales::find($request->id);
        $kinerjasales->nama_sales =$request->nama_sales;
        $kinerjasales->status_kinerja =$request->status_kinerja;
        $kinerjasales->save();
        return redirect('/kinerjasales');
    }

    public function delete($id = " ")
    {
        $kinerjasales = kinerjasales::find($id);
        $kinerjasales->delete();
        return redirect('/kinerjasales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kinerjasales  $kinerjasales
     * @return \Illuminate\Http\Response
     */
    public function destroy(kinerjasales $kinerjasales)
    {
        //
    }
}
