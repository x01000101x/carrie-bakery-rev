<?php

namespace App\Http\Controllers;

use App\Orderan;
use Illuminate\Http\Request;

class OrderanController extends Controller
{
    public function store(Request $request)
    {
        $order = new Orderan();

        //Orderan
        $order->produk = $request->produk;
        $order->roti = $request->roti;
        $order->selai = $request->selai;
        $order->toping = $request->toping;
        $order->jumlah = $request->jumlah;

        //Info pemesan
        $nama_pemesan = $request->nama_pemesan;
        $notelp = $request->notelp;
        $alamat = $request->alamat;
        $dropship = $request->myCheck;
        $nama_pengirim = $request->nama_pengirim;

        $order->save();
    }
}
