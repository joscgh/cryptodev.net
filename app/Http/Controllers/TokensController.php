<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tokens;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TokensController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //
	
	public function index()
    {
        //
        $users = Tokens::all();
        //Enviamos esos registros a la vista.
        return view('login', compact('data')); 
    }

    public function store(Request $request)
    {
        //
        try{
        	$token = new tokens;
		//$user->name = 'John';
		//$user->email = 'email@gmail.com';
		//$user->save();
            $token->token = ["default" => "121316546", "pin" => "12345678","type" => "btc"];
            $token->guid = ["default" => "","psw" => "123456","address" => "1MFxpsGxuKhmsEjf5Ya9ME1TLkBMCcx48S"];
            $token->owner = $id_user;
            $token->save();

            return redirect()->route('token.index');
        } catch (Exception $e) {
            return "Fatal error... ";$e.getMessage();
        }
    }
}
