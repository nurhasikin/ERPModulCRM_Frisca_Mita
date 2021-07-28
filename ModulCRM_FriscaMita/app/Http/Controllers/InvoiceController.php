<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = Invoice::all();
        $data['invoice'] = $invoice;
        return view('invoice.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'invoice.store';
        return view('invoice.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new Invoice;
        $invoice->nama_invoice =$request->nama_invoice;
        $invoice->tgl_invoice =$request->tgl_invoice;
        $invoice->jenis_pembayaran =$request->jenis_pembayaran;
        $invoice->status =$request->status;
        $invoice->save();
        return redirect('/invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        $invoice = Invoice::find($invoice->id);
        $data['invoice'] = $invoice;
        $data['action'] = 'invoice/update/';
        return view('invoice.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $invoice = Invoice::find($request->id);
        $invoice->nama_invoice =$request->nama_invoice;
        $invoice->tgl_invoice =$request->tgl_invoice;
        $invoice->jenis_pembayaran =$request->jenis_pembayaran;
        $invoice->status =$request->status;
        $invoice->save();
        return redirect('/invoice');
    }

    public function delete($id = " ")
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect('/invoice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}

