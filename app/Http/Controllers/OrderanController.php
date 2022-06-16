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
    // aku agak rubah ini versiku ya
    public function confirm(Request $request)
    {   
        $request->json_data=json_decode($request->json_data);
        // dd($_POST);
        foreach ($request->json_data as $key => $pdk) {
            // dd($produk,$request->json_data);
            $produk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $pdk[0])->first();
            $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('roti_nama', $pdk[2])->first();
            $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('selai_nama', $pdk[3])->first();
            $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('toping_nama', $pdk[4])->first();

            $rumus =
                ($produk->produk_harga * $pdk[5]) +
                ($roti->roti_harga * $pdk[5]) +
                // ($toping->toping_harga * $pdk[5]) +
                ($selai->selai_harga * $pdk[5]) ;

            // Create/update query.

            // dd($data=['request'=>$pdk,'produk'=>$produk,'roti'=>$roti,'selai'=>$selai,'toping'=>$toping,'rumus'=>$rumus]);

            
            $datas[$key] = [

                'harga_satuan' => $produk->produk_harga,

                //Orderan
                'produk' => $produk->produk_nama,
                'roti' => $roti->roti_nama,
                'selai' => $selai->selai_nama,
                // 'toping' => $toping->toping_nama,
                'jumlah' => $pdk[5],
                'harga' => $rumus,
                // 'gambar' => $request->gambar,

                //Info pemesan
                'pembeli' => $request->nama_pemesan,
                'notelp' => $request->notelp,
                'alamat' => $request->alamat,
                'dropship' => $request->myCheck,
                'pengirim' => $request->nama_pengirim
            ];
        }
        // dd($datas);
        return view('confirm', compact('datas'));
    }

    public function confirmleo(Request $request)
    {
        foreach ($request->produk_id as $key => $produk_id) {
            dd($key);
            $produk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $request->produk_id[$key])->first();
            $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('roti_nama', $request->roti[$key])->first();
            $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('selai_nama', $request->selai)->first();
            $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('toping_nama', $request->toping)->first();

            $rumus =
                ($produk->produk_harga * $request->jumlah) +
                ($roti->roti_harga * $request->jumlah) +
                ($selai->selai_harga * $request->jumlah) +
                ($toping->toping_harga * $request->jumlah);
            // Create/update query.

            $datas = [

                'harga_satuan' => $produk->produk_harga,

                //Orderan
                'produk' => $produk->produk_nama,
                'roti' => $roti->roti_nama,
                'selai' => $selai->selai_nama,
                'toping' => $toping->toping_nama,
                'jumlah' => $request->jumlah,
                'harga' => $rumus,
                // 'gambar' => $request->gambar,

                //Info pemesan
                'pembeli' => $request->nama_pemesan,
                'notelp' => $request->notelp,
                'alamat' => $request->alamat,
                'dropship' => $request->myCheck,
                'pengirim' => $request->nama_pengirim
            ];
        }
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

    public function checkout()
    {
        if (!empty($_POST['orderanjson'])) {
            $orderanjson = json_decode($_POST['orderanjson']);
            // dd($orderanjson);
            // foreach ($orderanjson as $key => $las) {
            //     $arcana = $this->countingroti($las[0]);
            //     $orderanjson[$key][0] = $arcana;

            //     $arcana = $this->countingtoping($las[2]);
            //     $orderanjson[$key][2] = $arcana;
            // }
        }
        // dd($orderanjson);
        // $produks = Produk::get();

        return view('form-pesan', compact('orderanjson'));
    }

    public function breads()
    {
        $breads = Produk::select('id', 'produk_nama', 'produk_gambar', 'produk_harga', 'kategori')->where('kategori', 'breads')->get();

        return view('breads', compact('breads'));
    }

    public function indonesian()
    {
        $indonesian = Produk::select('id', 'produk_nama', 'produk_gambar', 'produk_harga', 'kategori')->where('kategori', 'indonesian')->get();

        return view('indonesian', compact('indonesian'));
    }

    public function beverages()
    {
        $beverages = Produk::select('id', 'produk_nama', 'produk_gambar', 'produk_harga', 'kategori')->where('kategori', 'beverages')->get();

        return view('beverages', compact('beverages'));
    }

    public function jams()
    {
        $jams = Produk::select('id', 'produk_nama', 'produk_gambar', 'produk_harga', 'kategori')->where('kategori', 'jams')->get();

        return view('jams', compact('jams'));
    }
}
