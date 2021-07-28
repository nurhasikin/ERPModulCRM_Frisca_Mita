<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();
        $data['training'] = $trainings;
        return view('training.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'training.store';
        return view('training.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $training = new Training;
        $training->tanggal =$request->tanggal;
        $training->tempat =$request->tempat;
        $training->id_karyawan =$request->id_karyawan;
        $training->save();
        return redirect('/training');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $training = Training::find($id);
        $data['training'] = $training;
        $data['action'] = 'training/update';
        return view('training.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        $training = Training::find($request->id);
        $training->tanggal =$request->tanggal;
        $training->tempat =$request->tempat;
        $training->id_karyawan =$request->id_karyawan;
        $training->save();
        return redirect('/training');
    }

    public function delete($id)
    {
        $training = Training::find($id);
        $training->delete();
        return redirect('/training');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        //
    }
}