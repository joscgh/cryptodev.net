<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Http\Request;

class conectdb extends Controller
{
    public function insert()
    {
    	$datos = users::all();
    	print_r($datos);
    	//return view('mongo',['data']->$datos);
    }
}




