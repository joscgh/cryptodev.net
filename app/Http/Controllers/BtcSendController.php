<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\btc_send;
use App\Http\Resources\btc_send as btc_sendResource;

require_once('wallet.php');

class BtcSendController extends Controller
{
    //
    private $wallet;

    public function __construct()
    {
    	$this->wallet = new wallet();
    }
    public function send($api_key,$to,$amount,$fee)
    {
    	$this->wallet->start("0c8dd86a-bafc-4119-b572-5392f24374e4","97cc117a734be937337");
    	$response = $this->wallet->enviar($to,$amount,null,$fee);
    	echo $response;
    }
}