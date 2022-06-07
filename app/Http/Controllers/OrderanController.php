<?php

namespace App\Http\Controllers;

use App\Orderan;
use Illuminate\Http\Request;

class OrderanController extends Controller
{
    public function store(Request $request)
    {
        $order = Orderan::get();
    }
}
