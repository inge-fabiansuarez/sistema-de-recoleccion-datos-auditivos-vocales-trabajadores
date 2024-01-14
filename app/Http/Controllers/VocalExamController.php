<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VocalExamController extends Controller
{
    public function index(){
        return view('vocalexams.index');
    }
}
