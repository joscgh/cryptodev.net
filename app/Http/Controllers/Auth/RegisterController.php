<?php

namespace App\Http\Controllers\Auth;

use App\users;
use App\tokens;
use App\Http\Controllers\Controller;
use App\Http\Controllers\wallet;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    private $wallet; 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->wallet = new Wallet();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new users;
        $token = new tokens;            

        $pass =bcrypt($data['password']);
        $pass_enc = substr($pass, 3, 19);
        $token_aux = md5(rand(100000, 999999));

        $wallet = $this->wallet->crear($pass_enc, $data['email'], "Master");

        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->password = $pass;
        $user->email = $data['email'];
        $user->status = "success";
        $user->registration_date = date('Y-m-d H:i:s');
        $user->last_login = date('Y-m-d H:i:s');
        $user->plan = ["default" => "free",'start_date' => date('Y-m-d H:i:s'),'date_expire' => date('Y-m-d H:i:s')];
        $user->save();
            
        $token->token = ["default" => $token_aux, "pin" => $this->generaPin(),"type" => "btc"];
        $token->guid = ["default" =>  $wallet->guid ,"psw" => $pass_enc,"address" => $wallet->address];
        $token->owner = $user->_id;
        $token->save();

        return $user;
    }

    private function generaPin() 
    {
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena = strlen($cadena);

        $pass = "";
        $longitudPass = 20;

        for($i = 1; $i <= $longitudPass; $i++) 
        {
            $pos = rand(0, $longitudCadena - 1);
            $pass .= substr($cadena, $pos, 1);
        }
        return $pass;
    }
}
