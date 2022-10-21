<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewHome(){
        return view('home');
    }

    public function viewContact(){
        return view('contact');
    }

    public function viewAbout(){
        return view('about');
    }

}
