<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        $data['order'] = $order;
        return view('order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'order.store';
        return view('order.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->nama_sales =$request->nama_sales;
        $order->deskriptiom =$request->deskriptiom;
        $order->tgl_order =$request->tgl_order;
        $order->diskon_invoice =$request->diskon_invoice;
        $order->jenis_pembayaran=$request->jenis_pembayaran;
        $order->harga=$request->harga;
        $order->save();
        return redirect('/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $order = Order::find($order->id);
        $data['order'] = $order;
        $data['action'] = 'order/update/';
        return view('order.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $order = Order::find($request->id);
        $order->nama_sales =$request->nama_sales;
        $order->deskriptiom =$request->deskriptiom;
        $order->tgl_order =$request->tgl_order;
        $order->diskon_invoice =$request->diskon_invoice;
        $order->jenis_pembayaran=$request->jenis_pembayaran;
        $order->harga=$request->harga;
        $order->save();
        return redirect('/order');
    }

    public function delete($id = " ")
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}