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
    public function show2(Request $request)
    {
        $id_produk = $request->route('id');

        $produks = Produk::where('id', $id_produk)->get();
        $selais = Selai::get();
        $topings = Toping::get();
        $rotis = Roti::get();

        return view('order', compact('produks', 'selais', 'topings', 'rotis'));
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
