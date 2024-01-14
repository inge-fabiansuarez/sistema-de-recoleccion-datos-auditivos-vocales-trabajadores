<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedidasController extends Controller
{
    public function vocalPreventivas(){
        return view('medidas.vocalpreventivas');
    }
    public function vocalCorrectivas(){
        return view('medidas.vocalcorrectivas');
    }
    public function auditivaPreventivas(){
        return view('medidas.auditivapreventivas');
    }
    public function auditivaCorrectivas(){
        return view('medidas.auditivacorrectivas');
    }
}
