<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShineController extends Controller
{
    
    public function index(){
        return view('welcomeeee');
    }

    public function utgaAvah(Request $request){
        return dd($request->ner);
    }

}