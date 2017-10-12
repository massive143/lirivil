<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coDashboard extends Controller
{
    function home(){
    	return view('app.dashboard');
    }

    function produk(){
    	return view('app.produk');
    }
}
