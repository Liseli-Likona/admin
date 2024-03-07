<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Adavance;


use Illuminate\Http\Request;

class generatepdf extends Controller
{
    public function generatepdf(){
        $adavances=Adavance::latest()->get();
        $data=[
            'adavances'=>$adavances,

        ];

        $pdf = Pdf::loadView('downloadpdf', $data)->setPaper('a4','landscape');
        return $pdf->download('showadavances.pdf');

    }
}
