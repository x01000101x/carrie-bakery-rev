<?php

namespace App\Http\Controllers;

use App\Models\Roti;
use App\Orderan;
use App\Produk;
use App\Selai;
use App\Toping;
use Illuminate\Http\Request;

class OrderanController extends Controller
{
    public function store(Request $request)
    {
        $order = new Orderan();

        $produk = Produk::select('id', 'produk_harga')->where('id', $request->produk_id)->get();
        $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('id', $request->roti)->get();
        $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('id', $request->selai)->get();
        $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('id', $request->toping)->get();

        $rumus = "";

        //Orderan
        $order->produk = $request->produk;
        $order->roti = $roti->roti_nama;
        $order->selai = $selai->selai_nama;
        $order->toping = $toping->toping_nama;
        $order->jumlah = $request->jumlah;
        $order->harga = $request->jumlah;
        $order->gambar = $request->gambar;

        //Info pemesan
        $order->nama_pembeli = $request->nama_pemesan;
        $order->notelp = $request->notelp;
        $order->alamat = $request->alamat;
        $order->dropship = $request->myCheck;
        $order->nama_pengirim = $request->nama_pengirim;

        $order->save();
    }
}
