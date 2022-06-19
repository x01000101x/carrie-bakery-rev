<?php

namespace App\Http\Controllers;

use App\BestSeller;
use App\Mediaheading;
use Illuminate\Http\Request;
use App\Slider;
use App\Title;
use App\Testimoni;
use App\Partner;

class SliderController extends Controller
{
    public function index()
    {
        $slider = new Slider();
        $mediaheading = new Mediaheading();
        $title = new Title();
        $bestseller = new BestSeller();
        $testimoni = new Testimoni();
        $partner = new Partner();

        $sliders = $slider::select('id', 'image')->get();
        $mediaheadings = $mediaheading::select('id', 'icon', 'head', 'description')->get();
        $titles = $title::select('id', 'head', 'description')->get();
        $bestsellers = $bestseller::select('id', 'nama', 'deskripsi', 'gambar', 'link')->get();
        $testimonis = $testimoni::select('id', 'nama', 'gambar', 'komen', 'lokasi', 'tanggal')->get();
        $partners = $partner::select('id', 'gambar')->get();


        return view('index', compact('sliders', 'mediaheadings', 'titles', 'bestsellers', 'testimonis', 'partners'));
    }
}
