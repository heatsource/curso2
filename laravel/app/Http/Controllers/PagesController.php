<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('tickets.create');
    }

    public function home(){
    	return view('home');
    }
}
