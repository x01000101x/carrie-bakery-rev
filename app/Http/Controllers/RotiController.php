<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RotiController extends Controller
{
    public function show()
    {
        return view('shop');
    }
    public function show2()
    {
        return view('order');
    }
}
