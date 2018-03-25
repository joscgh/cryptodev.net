<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\tokens;
use App\btc_wallet;
use App\users;
use App\user_info;
use App\user_residence;
use App\transactions;
use App\addresses;
use Auth;
use App\Http\Resources\btc_wallet as btc_walletResource;

require_once('wallet.php');

class BtcWalletController extends Controller
{
    //
    private $wallet;

    public function __construct()
    {
        $this->wallet = new wallet();
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $balance = 0;
        $bal_usd = 0;
        $btc_val = 0;
        $user = Auth::user();
        $token = tokens::where('owner','=', $user->_id)->first();
        
        if(!empty($token))
        {  
            $this->wallet->start($token['guid']['default'],$token['guid']['psw']);
            $balance = $this->wallet->balance();
            $btc_val = $this->wallet->btc_dolar("100000000","USD");
            $bal_usd = round(floatval($balance) * floatval($btc_val),2);
        }

        $data = (object)[
                "btc_val" => $btc_val,
                "balance" => $balance,
                "bal_usd" => $bal_usd,
            ];
        
        return view('dashboard', compact('data'));
    }

    public function api()
    {
        //
        $user = Auth::user();
        $token = tokens::where('owner','=', $user->_id)->first();
        
        if(!empty($token))
        {
            $data = (object)[
                "api_key" => $token->token['default'],
                "address" => $token->guid['address'],
            ];
        }
        else
        {
            $data = (object)[
                "api_key" => "",
                "address" => "",
            ];
        }  

        return view('api', compact('data'));
    }
    
    public function transactions()
    {
        $user = Auth::user();
        $transaction = transactions::where('owner','=', $user->_id)->first();
        $btc_val = $this->wallet->btc_dolar("100000000","USD");

        if(!empty($transaction))
        {
            $cant_usd = round(floatval($transaction->amount) * floatval($btc_val),2);
            $transaction = (object)[
                "who_send" => $transaction->who_send,
                "who_received" => $transaction->who_received,
                "amount" => $transaction->amount,
                "fee" => $transaction->fee,
                "cant_usd" => $cant_usd,
                "btc_val" => $btc_val,
            ];
        }
        else
        {
            $transaction = (object)[
                "who_send" => "",
                "who_received" => "",
                "amount" => "",
                "fee" => "",
                "cant_usd" => "",
                "btc_val" => "",
            ];
        }

        return view('transacciones', compact('transaction'));
    }

    public function addresses()
    {
        $user = Auth::user();
        $address = addresses::where('owner','=', $user->_id)->first();
        
        if(empty($address))
        {
            $address = (object)[
                "label" => "",
                "address" => "",
                "balance" => "",
                "type" => "",
            ];
        }

        return view('direcciones', compact('address'));
    }

    public function profile()
    {
        $user = Auth::user();
        $user_info = user_info::where("owner","=",$user->_id)->first();
        $user_residence = user_residence::all();
        var_dump($user_info);
        return view('perfil', compact('user','user_residence','user_info'));
    }

    public function balance($api_key)
    {
        //$datos = DB::collection('users')->get();
        $token = DB::collection('tokens')->where('token.default', '=', $api_key)->first();//->where('name', '=', 'John')->get();     
        //var_dump($token['guid']['psw']);

        if(!empty($token))
            $this->wallet->start($token['guid']['default'],$token['guid']['psw']);
        else
            return;

        $response = $this->wallet->balance();
        dd($response);
    }

    public function listaddress($api_key)
    {
        $this->wallet->start("0c8dd86a-bafc-4119-b572-5392f24374e4","97cc117a734be937337");
        $response = $this->wallet;
        //$response = $this->db->showaddresses($data['guid']);
    }

    public function create($api_key,$correo)
    {
        
    }

    public function balanceaddress($api_key,$address)
    {
        $this->wallet->start("0c8dd86a-bafc-4119-b572-5392f24374e4","97cc117a734be937337");
        $response = $this->wallet->balanceAddress($address);
        var_dump($response);
    }
}
