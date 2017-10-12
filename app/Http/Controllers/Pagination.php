<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;

class pagination extends Controller
{
    public function users(){
    	$users = Table::paginate(3);
    	return view('app.pagination',compact('users'));
    }
}
