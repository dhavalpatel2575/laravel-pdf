<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PDFMaker extends Controller
{
    //
    function gen()
    {
        echo "code will be here";
        $pdf=App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>HEllo</h1>');
        return $pdf->stream();
    }
}
