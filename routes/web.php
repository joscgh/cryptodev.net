<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function(){
    return view('login');
});

Route::get('/contact', function(){
    return view('contact');
});


Route::get('/mongo', 'Controller@insert');
Route::resource('users', "UsersController");
Route::resource('tokens', "TokensController");
Route::resource('btcwallet', "BtcWalletController");

Route::get('/api/btc/balance/{api_key}', 'BtcWalletController@balance');
Route::get('/api/btc/market_price/{value}/{coin}', 'BtcWalletController@market_price');

Auth::routes();
Route::get('/dashboard', 'BtcWalletController@index');
//Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');

/*
 | Para mostrar vistas como invitado y como autenticado
 |
 */


/* vistas para usuario invitado */

Route::group(['middleware' => ['guest']],function(){
	Route::get('/sign-up', function(){
    	return view('sign-up');
	});
	Route::get('/', function(){
    	return view('cryptodev');
	});
});

/* vistas para usuario autenticado */

Route::group(['middleware' => 'auth'], function()
{
	Route::get('/addresses', 'BtcWalletController@addresses');
	Route::get('/transactions', 'BtcWalletController@transactions');
	Route::get('/profile','BtcWalletController@profile');
	//Route::get('/send-u','BtcWalletController@profile');

	Route::get('/payments', function(){
    	return view('pagos');
	});
	Route::get('/api', 'BtcWalletController@api');
});

