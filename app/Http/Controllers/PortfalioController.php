<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfalioController extends Controller
{
    public function index() {

        return view('home');
        
    }

    public function contact() {

        return view('contact');
        
    }

    public function portfolio() {

        return view('portfolio');
        
    }

    public function about() {

        return view('about');
        
    }
    public function contactForm(Request $request){

        return view('contact', ['data'=> $request]);
        
    }
       
}
