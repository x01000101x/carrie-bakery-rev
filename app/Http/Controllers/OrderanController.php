<?php

namespace App\Http\Controllers;

use App\Models\Roti;
use App\Orderan;
use App\Produk;
use App\Selai;
use App\Toping;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Session\Session;


class OrderanController extends Controller
{

    public function confirm(Request $request)
    {
        $produk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $request->produk_id)->first();
        $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('id', $request->roti)->first();
        $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('id', $request->selai)->first();
        $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('id', $request->toping)->first();

        $rumus =
            ($produk->produk_harga * $request->jumlah) +
            ($roti->roti_harga * $request->jumlah) +
            ($selai->selai_harga * $request->jumlah) +
            ($toping->toping_harga * $request->jumlah);

        $datas = [

            //Orderan
            'produk' => $produk->produk_nama,
            'roti' => $roti->roti_nama,
            'selai' => $selai->selai_nama,
            'toping' => $toping->toping_nama,
            'jumlah' => $request->jumlah,
            'harga' => $rumus,
            'gambar' => $request->gambar,

            //Info pemesan
            'pembeli' => $request->nama_pemesan,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'dropship' => $request->myCheck,
            'pengirim' => $request->nama_pengirim
        ];

        return view('confirm', compact('datas'));
    }

    public function store(Request $request)
    {
        $order = new Orderan();

        $produk = Produk::select('id', 'produk_nama', 'produk_harga')->where('id', $request->produk_id)->first();
        $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('id', $request->roti)->first();
        $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('id', $request->selai)->first();
        $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('id', $request->toping)->first();

        $rumus =
            ($produk->produk_harga * $request->jumlah) +
            ($roti->roti_harga * $request->jumlah) +
            ($selai->selai_harga * $request->jumlah) +
            ($toping->toping_harga * $request->jumlah);

        //Orderan
        $order->produk = $produk->produk_nama;
        $order->roti = $roti->roti_nama;
        $order->selai = $selai->selai_nama;
        $order->toping = $toping->toping_nama;
        $order->jumlah = $request->jumlah;
        $order->harga = $rumus;
        $order->gambar = $request->gambar;

        //Info pemesan
        $order->nama_pembeli = $request->nama_pemesan;
        $order->notelp = $request->notelp;
        $order->alamat = $request->alamat;
        $order->dropship = $request->myCheck;
        $order->nama_pengirim = $request->nama_pengirim;

        $order->save();

        // Session::flash('message', "Special message goes here");
        // return redirect()->route('shop')->with('success', 'berhasil dipesan');
    }
}
