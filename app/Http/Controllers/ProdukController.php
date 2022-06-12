<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Roti;
use App\Selai;
use App\Toping;
use App\Produk;

class ProdukController extends Controller
{
    public function show()
    {
        $produks = Produk::get();
        return view('shop', compact('produks'));
    }

    public function lgarinchekout()
    {
        if (!empty($_POST['orderanjson'])) {
            $orderanjson =json_decode($_POST['orderanjson']);
            foreach ($orderanjson as $key => $las) {
                $arcana=$this->countingroti($las[0]);
                $orderanjson[$key][0]=$arcana;

                $arcana=$this->countingtoping($las[2]);
                $orderanjson[$key][2]=$arcana;
            }
        }
        // dd($orderanjson);
        // $produks = Produk::get();
        return view('Agus_Chekout.cek');
    }

    public function countingroti($roti)
    {
        $rotinya=Roti::where('roti_nama', $roti)->first();
        $roti=['harga'=>$rotinya->roti_harga,'nama'=>$roti];
        return $roti;
    }

    public function countingtoping($toping)
    {
        $topingnya=Toping::where('toping_nama', $toping)->first();
        $toping=['harga'=>$topingnya->toping_harga,'nama'=>$toping];
        return $toping;
    }

    public function show2(Request $request)
    {
        $id_produk = $request->route('id');

        $produks = Produk::where('id', $id_produk)->get();
        $selais = Selai::get();
        $topings = Toping::get();
        $rotis = Roti::get();

        return view('order', compact('produks', 'selais', 'topings', 'rotis'));
    }
    
    public function show_sobek()
    {
        $produks = Produk::get();
        return view('shop_sobek');
    }
    public function nineselai(Request $request)
    {
        // $produks = Produk::where('id', $id_produk)->get();
        $selais = Selai::get();
        $topings = Toping::get();
        $rotis = Roti::get();
        $data=[
            'selais' => $selais,
            'topings' => $topings,
            'rotis' => $rotis
        ];
        return view('nine_hendeler/nine',$data);
    }

    public function nineorder(Request $request)
    {
        dd(json_decode($request->kombinasi_rasa),$request->kombinasi_toping);
    }

    public function oneselai(Request $request)
    {
        // $produks = Produk::where('id', $id_produk)->get();
        $selais = Selai::get();
        $topings = Toping::get();
        $rotis = Roti::get();
        $data=[
            'selais' => $selais,
            'topings' => $topings,
            'rotis' => $rotis
        ];
        return view('one_hendeler/one',$data);
    }

}
