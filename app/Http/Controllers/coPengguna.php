<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use Validator;

class coPengguna extends Controller
{
    function cekLogin(Request $req){

    	$validator = Validator::make($req->all(),[

    		'username'=>[

    			'required',
    			'min:3',
    			'max:20',
    			'exists:Pengguna,username',
    		],
    		'password'=>[

    			'required',
    			'min:3',
    		],

    	]);


    	if ($validator->fails()){
    		return redirect('login')
    					->withErrors('$validator')
    					->withInput();
    	}

    	$user = $req->username;
    	$pass = md5($req->password);

    	$check = Pengguna::where('username',$user)->where('password',$pass)->count();

    	if( !($check>0)){
    		return redirect('login')->with('status','salah');
    	}

    	$take = Pengguna::where('username',$user)->where('password',$pass)->first();
    	
    	session(['username'=>$take->username]);
    	session(['level'=>$take->leve]);
    	session(['password'=> true]);

    	return redirect('index');

    }
    //logout

    function logout(Request $req){

    	$req->session()->regenerate();
    	$req->session()->flush();
    	return redirect('login');
    }

}
