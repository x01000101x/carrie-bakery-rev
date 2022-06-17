<?php

namespace App\Http\Controllers;

use App\Mediaheading;
use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $slider = new Slider();
        $mediaheading = new Mediaheading();


        $sliders = $slider::select('id', 'image')->get();
        $mediaheadings = $mediaheading::select('id', 'icon', 'head', 'description')->get();

        return view('index', compact('sliders', 'mediaheadings'));
    }
}
