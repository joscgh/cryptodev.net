<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/btc/newaddress/{api_key}/{pin}/{label}', 'ApiController@new_addaddress');
Route::get('/btc/listaddress/{api_key}/{pin}/', 'ApiController@list_addresses');
Route::get('/btc/addressbalance/{api_key}/{address}', 'ApiController@balanceaddress');

Route::get('/btc/send/{api_key}/{pin}/{from}/{to}/{amount}/{fee}', 'ApiController@send');


//Route::get('/btc/balance/{api_key}', 'BtcWalletController@balance');
//Route::get('/btc/create/{api_key}/{correo}', 'ApiController@create');

Route::get('/btc/archive/{api_key}/{address}', 'ApiController@archiveaddress');
Route::get('/btc/unarchive/{api_key}/{address}', 'ApiController@unarchiveaddress');
Route::get('/btc/market_price/{value}/{coin}', 'ApiController@market_price');
//Route::get('/btc/listaddress/{api_key}', 'ApiController@listaddress');




