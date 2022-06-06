<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Roti;


class RotiController extends Controller
{
    public function show()
    {
        $rotis = Roti::get();

        return view('shop', compact('rotis'));
    }
    public function show2()
    {
        $rotis = Roti::all();
        // dd($roti);
        return view('order', compact('rotis'));
    }
}
