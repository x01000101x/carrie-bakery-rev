<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $slider = new Slider();

        $sliders = $slider::select('id', 'image')->get();

        return view('dashboard', compact('sliders'));
    }
}
