<?php

namespace App\Http\Controllers;

use App\Models\Roti;
use App\Orderan;
use App\Produk;
use App\Selai;
use App\Toping;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
// use Symfony\Component\HttpFoundation\Session\Session;


class OrderanController extends Controller
{
    // aku agak rubah ini versiku ya
    public function confirm(Request $request)
    {

        // dd($koks);
        $orderanjson = $request->json_data;
        $request->json_data = json_decode($request->json_data);
        // dd($request->json_data);
        // dd($_POST);
        foreach ($request->json_data as $key => $pdk) {
            // dd($pdk);

            // dd($produk,$request->json_data);
            $produk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $pdk[0])->first();
            $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('roti_nama', $pdk[2])->first();
            $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('selai_nama', $pdk[3])->first();
            $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('toping_nama', $pdk[4])->first();

            // dd($produk->produk_harga);
            // dd($pdk[4]);
            $rumus =
                ($produk->produk_harga * $pdk[5]) +
                ($roti->roti_harga * $pdk[5]) +
                ($toping->toping_harga * $pdk[5]) +
                ($selai->selai_harga * $pdk[5]);

            // Create/update query.

            // dd($data=['request'=>$pdk,'produk'=>$produk,'roti'=>$roti,'selai'=>$selai,'toping'=>$toping,'rumus'=>$rumus]);


            $datas[$key] = [

                'harga_satuan' => $produk->produk_harga,

                //Orderan
                'produk' => $produk->produk_nama,
                'roti' => $roti->roti_nama,
                'selai' => $selai->selai_nama,
                'toping' => $toping->toping_nama,
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

        $pemesan = $request->nama_pemesan;
        $notelp = $request->notelp;
        $alamat = $request->alamat;
        $myCheck = $request->myCheck;
        $pengirim = $request->nama_pengirim;
        $pesanan_id = $request->pesanan_id;


        $order = new Orderan();
        $order->produk = $produk->produk_nama;
        $order->roti = $roti->roti_nama;
        $order->selai = $selai->selai_nama;
        $order->toping = $toping->toping_nama;
        $order->jumlah = $pdk[5];
        $order->harga = $rumus;
        $order->nama_pembeli = $request->nama_pemesan;
        $order->notelp = $request->notelp;
        $order->alamat = $request->alamat;
        $order->dropship = $request->myCheck;
        $order->nama_pengirim = $request->nama_pengirim;
        $order->pesanan_id = $request->pesanan_id;
        $order->save();

        $koks = Orderan::select('id', 'pesanan_id', 'notelp', 'status')->where('pesanan_id', $request->pesanan_id)->orderBy('id', 'DESC')->first();

        // dd($datas);
        return view('confirm', compact('datas', 'orderanjson', 'pesanan_id', 'pemesan', 'notelp', 'alamat', 'myCheck', 'pengirim', 'koks'));
    }


    public function store(Request $request)
    {
        // dd(json_decode($request->orderan));
        $ppa = json_decode($request->orderan);
        $xxx = json_decode($ppa);

        $orderanjson = $request->json_data;
        $request->json_data = json_decode($request->json_data);

        foreach ($xxx as $key => $pdk) {
            // dd($produk,$request->json_data);
            $produk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $pdk[0])->first();
            $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('roti_nama', $pdk[2])->first();
            $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('selai_nama', $pdk[3])->first();
            $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('toping_nama', $pdk[4])->first();


            $rumus =
                ($produk->produk_harga * $pdk[5]) +
                ($roti->roti_harga * $pdk[5]) +
                // ($toping->toping_harga * $pdk[5]) +
                ($selai->selai_harga * $pdk[5]);

            $datas[$key] = [

                'harga_satuan' => $produk->produk_harga,

                //Orderan
                'produk' => $produk->produk_nama,
                'roti' => $roti->roti_nama,
                'selai' => $selai->selai_nama,
                'toping' => $toping->toping_nama,
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

        $pemesan = $request->nama_pemesan;
        $notelp = $request->notelp;
        $alamat = $request->alamat;
        $myCheck = $request->myCheck;
        $pengirim = $request->nama_pengirim;
        $pesanan_id = $request->pesanan_id;



        // Create/update query.

        // dd($data=['request'=>$pdk,'produk'=>$produk,'roti'=>$roti,'selai'=>$selai,'toping'=>$toping,'rumus'=>$rumus]);


        // $datas[$key] = [

        //     'harga_satuan' => $produk->produk_harga,

        //     //Orderan
        //     'produk' => $produk->produk_nama,
        //     'roti' => $roti->roti_nama,
        //     'selai' => $selai->selai_nama,
        //     // 'toping' => $toping->toping_nama,
        //     'jumlah' => $pdk[5],
        //     'harga' => $rumus,
        //     // 'gambar' => $request->gambar,

        //     //Info pemesan
        //     'pembeli' => $request->nama_pemesan,
        //     'notelp' => $request->notelp,
        //     'alamat' => $request->alamat,
        //     'dropship' => $request->myCheck,
        //     'pengirim' => $request->nama_pengirim
        // ];
        $order = new Orderan();
        $koks = Orderan::select('id', 'pesanan_id', 'notelp', 'status')->where('pesanan_id', $request->pesanan_id)->orderBy('id', 'DESC')->first();
        //Orderan
        $order->produk = $produk->produk_nama;
        $order->roti = $roti->roti_nama;
        $order->selai = $selai->selai_nama;
        $order->toping = $toping->toping_nama;
        $order->jumlah = $pdk[5];
        $order->harga = $rumus;
        // $order->gambar = $request->gambar;

        //ignore comment below
        //agus request to push


        //Info pemesan
        $order->nama_pembeli = $request->nama_pemesan;
        $order->notelp = $request->notelp;
        $order->alamat = $request->alamat;
        $order->dropship = $request->myCheck;
        $order->nama_pengirim = $request->nama_pengirim;

        $order->save();


        return view('confirm', compact('koks', 'pesanan_id', 'datas', 'orderanjson', 'pemesan', 'notelp', 'alamat', 'myCheck', 'pengirim'));






        // Session::flash('message', "Special message goes here");
        // return redirect()->route('shop')->with('success', 'berhasil dipesan');

    }


    // public function confirmleo(Request $request)
    // {
    //     foreach ($request->produk_id as $key => $produk_id) {
    //         dd($key);
    //         $produk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $request->produk_id[$key])->first();
    //         $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('roti_nama', $request->roti[$key])->first();
    //         $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('selai_nama', $request->selai)->first();
    //         $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('toping_nama', $request->toping)->first();


    //         // foreach ($order as $tes) {

    //         //     // $ppk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $mmk[5])->get()->toArray();
    //         //     // var_dump($ppk);

    //         // }

    //         // $keys = array_keys($order);
    //         // for ($i = 0; $i < count($order); $i++) {
    //         //     foreach ($order[$keys[$i]] as $key => $value) {
    //         //         echo  $value . "<br>";
    //         //     }
    //         // }
    //         foreach ($order as $ord) {

    //             $produk = Produk::select('id', 'produk_harga', 'produk_nama')->where('id', $ord[5])->first();
    //             $roti = Roti::select('id', 'roti_nama', 'roti_harga')->where('roti_nama', $ord[2])->first();
    //             $selai = Selai::select('id', 'selai_nama', 'selai_harga')->where('selai_nama', $ord[3])->first();
    //             $toping = Toping::select('id', 'toping_nama', 'toping_harga')->where('toping_nama', $ord[4])->first();
    //             $rumus =
    //                 ($produk->produk_harga * $ord[5]) +
    //                 ($roti->roti_harga * $ord[5]) +
    //                 ($selai->selai_harga * $ord[5]) +
    //                 ($toping->toping_harga * $ord[5]);
    //         }


    //         // dd($order);
    //         // foreach ($order as $ord) {
    //         //     dd($ord);
    //         // }



    //         // dd($order[0]);

    //         // Create/update query.

    //         $datas = [

    //             'harga_satuan' => $produk->produk_harga,

    //             //Orderan
    //             'produk' => $produk->produk_nama,
    //             'roti' => $roti->roti_nama,
    //             'selai' => $selai->selai_nama,
    //             'toping' => $toping->toping_nama,
    //             'jumlah' => $request->jumlah,
    //             'harga' => $rumus,
    //             // 'gambar' => $request->gambar,

    //             //Info pemesan
    //             'pembeli' => $request->nama_pemesan,
    //             'notelp' => $request->notelp,
    //             'alamat' => $request->alamat,
    //             'dropship' => $request->myCheck,
    //             'pengirim' => $request->nama_pengirim
    //         ];

    //         return view('confirm', compact('datas', 'order'));
    //     }
    // }

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

    public function download()
    {

        // $datas = $kamar::join('resepsis', "kamars.id", "resepsis.id_kamar")
        //     ->where("id_user", $id)->get()->toArray();

        // $pdf = PDF::loadView('unduh', compact('datas'));

        // return $pdf->download('reservasi-hotel-hebat.pdf');
    }
}
