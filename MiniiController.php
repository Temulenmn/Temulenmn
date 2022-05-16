<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniiController extends Controller
{
    //
    public function index(){
        // return "index function duudagdlaa";
        $too = array('too1','too2',40,50);
        $name = "Azaa";
        $age = 50;
        return view('welcome', compact('name','age','-'));//compact funkts ni php turliin fuynkts 
        //array turliin massivuudiig avdag
//        return view('welcome');
    }
    public function second(){
        return "second page";
    }
    public function post(){
        return "Post shuu!!!";
    }
}
