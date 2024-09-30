<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Todoscontroller extends Controller
{
    public function about(){
        return view('about');
    }

    public function welcome(){
        return view('welcome');
    }

    public function contact(){
        return view('contact');
    }
}
