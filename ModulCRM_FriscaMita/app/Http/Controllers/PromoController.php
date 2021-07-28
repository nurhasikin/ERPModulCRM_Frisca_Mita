<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = Promo::all();
        $data['promo'] = $promo;
        return view('promo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'promo.store';
        return view('promo.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = new Promo;
        $promo->nama_promo =$request->nama_promo;
        $promo->diskon_promo =$request->diskon_promo;
        $promo->save();
        return redirect('/promo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        $promo = Promo::find($promo->id);
        $data['promo'] = $promo;
        $data['action'] = 'promo/update/';
        return view('promo.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $promo = Promo::find($request->id);
        $promo->nama_promo =$request->nama_promo;
        $promo->diskon_promo =$request->diskon_promo;
        $promo->save();
        return redirect('/promo');
    }

    public function delete($id = " ")
    {
        $promo = Promo::find($id);
        $promo->delete();
        return redirect('/promo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        //
    }
}

