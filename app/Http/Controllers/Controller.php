<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


 //Codigo inutil (test)
     public function insert()
    {

    	//users::create(['names' => 'John']);
    	//$user = new users;
		//$user->name = 'John';
		//$user->email = 'email@gmail.com';
		//$user->save();

    	$datos = DB::collection("users")->get();
    	dd($datos);
    	//return view('mongo',['data']->$datos);



    }  
    
}
