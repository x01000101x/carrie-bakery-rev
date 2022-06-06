<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Roti;
use App\Selai;
use App\Toping;

class RotiController extends Controller
{
    public function show()
    {
        $rotis = Roti::get();

        return view('shop', compact('rotis'));
    }
    public function show2(Request $request)
    {
        $id_roti = $request->route('id');

        $rotis = Roti::where('id', $id_roti)->get();
        $selais = Selai::get();
        $topings = Toping::get();

        return view('order', compact('rotis', 'selais', 'topings'));
    }
}
