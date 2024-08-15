<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function myshop()
    {
           $address = "IT CP KKU";
           $mobliephone = "088888888";
           $location = "Khon kaen";

           return view('myshop',[
            'address' => $address,
            'mobile' => $mobliephone,
            'location' => $location
           ]);
    }
}
