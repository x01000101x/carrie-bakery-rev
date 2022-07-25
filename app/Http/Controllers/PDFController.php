<?php

namespace App\Http\Controllers;

use App\Orderan;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function download()
    {

        // dd($_POST['orderanjson']);

        // dd(Orderan::);

        // $resepsi = new Resepsi();
        // $kamar = new Kamar();

        // $datas = $kamar::join('resepsis', "kamars.id", "resepsis.id_kamar")
        //     ->where("id_user", $id)->get()->toArray();

        $pdf = PDF::loadView('confirm');

        return $pdf->download('invoice-carrie-bakery.pdf');
    }
}
