<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\users;
use App\tokens;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends BaseController
{
    //
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    private $path = "users";

    public function __construct()
    {
    	$this->wallet = new wallet();
    }

    public function show($id)
    {
    	//
        $user = users::findOrFail($id);
        $token = tokens::findOrFail($user->_id);
        return view('dashboard', compact('token')); 
    }

    public function index()
    {
        //

    }

    public function edit($id)
    {
        //

    }
    
    public function update(Request $request, $id)
    {
        $user = user_info::findOrFail($id);
    }

    public function store(Request $request)
    {
        //
        try
        {
           // 
        } catch (Exception $e) {
            return "Fatal error... ";$e.getMessage();
        }
    }
}
