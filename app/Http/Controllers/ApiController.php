<?php

namespace App\Http\Controllers;
use App\tokens;
use App\addresses;
use App\transactions;
use App\plans;
use App\users;
use Illuminate\Http\Request;
require('wallet.php');
class ApiController extends Controller
{
	private $wallet;
    public function __construct()
    {
        $this->wallet = new wallet();
    }
	// creamos una direccion BTC al cliente.
    public function new_addaddress($api_key,$pin,$label)
    {
   	// buscamos el token {Api_key: parametro} en al base de datos
       $token = tokens::where('token.default','=', $api_key)->first();
      
       //verificamos que exista en la DB
       if (!empty($token))
         {
         	//verificamos que sea el pin correcto
            if($token->token['pin'] == $pin)
            {
      				//indentificamos el usuario dueño del token.
            		$user = users::where('_id','=',$token->owner)->first();
            		//verificamos que el estado del usuario sea success y que no este baneado etc.
            	if($user->status == 'success') {
            		//identificamos el plan del usuario.
            		$plan = $user->plan['default'];
            		//cargamos los benefits del plan Max_address y request.
            		$plan_user = plans::where('name','=',$plan)->first();
            		//verificamos el numero de direcciones creada por el cliente.
            		$addresses_total = addresses::where(['owner'=>$token->_id])->count();
					//verificamos que no haya sobrepasado la cantidad maxima de direcciones que su plan le permite tener.
	            	if ($plan_user->benefits['max_address'] > $addresses_total) 
	            	{	            			
	            		//iniciamos y identificamos los usuarios en el API de Blockchain
	            		$this->wallet->start($token->guid['default'],$token->guid['psw']);
	            		//Creamos y recojemos los datos devueltos por BlockChain
	                	$response = $this->wallet->newAddress($label);
	                	//verificamos que la direccion se creo y devolvio los datos para entregar al usuario.
	                	if(isset($response->address)){

	                	//encapsulamos los datos en JSON 	
	                	$response = json_encode(array('status'=>'success','data'=>['balance'=> $response->balance,
	                															   'address' =>$response->address, 
	                															   'label'=>$response->label,
	                															   'total_received'=>$response->total_received]
	                															));
	                	//guardamos todos los datos en la DB...
	                	$response = json_decode($response,true);
	                	$addresses = new addresses;
	                	$addresses->address= $response['data']['address'];
	                	$addresses->label=$response['data']['label'];
	                	$addresses->balance=$response['data']['balance'];
	                	$addresses->balance_pending = 0;
	                	$addresses->owner=$token->_id;
	                	$addresses->status='success';
	                	$addresses->type='btc';
	                	//accion que guarda los datos.
	                	$addresses->save(); }

	                	//Esto pasara si por alguna razon no se pudo crear la direccion. 
	                	else $response = json_encode(array('status'=>'fail','data'=>['error_message'=>'the address could not be created, please contact the administration.']));
	            	}
	            	else
	            	{
	            		//si la cantidad de direcciones del plan de usuario llega al limite, se le avisara. ("pendiente por agregar links de mejoras de planes")
	            		$response = json_encode(array('status'=>'fail','data'=>['error_message'=> 'Maximum capacity of available addresses exceeded for the plan {'.
	            			$plan.'} - total available : '.$plan_user->benefits['max_address'].'.',]));
	            	}

	            }

	            else
	            {
	            	//si la cuenta del usuarios es suspendida por alguna u otra razon, se le notificara con el estado de su cuenta.
	            	$response = json_encode(array('status'=>'fail','data'=>['error_message'=> 'you have problems with your account the status is : {'.
	            			$user->status.'} contact the administration for more information.',]));
	            }	     
            }

            else
            {
            	//si el pin del usuarios/Token es erroneo.
                $response = json_encode(array('status'=>'fail','data'=>['error_message'=>'Invalid value for parameter {pin} provided.']));
            }
         }

         else
         {
         	//Si el Api_key/token del usuario no existe.
            $response = json_encode(array('status'=>'fail','data'=>['error_message'=>'Invalid value for parameter {Api_key} provided.']));
         }

					//respuesta a cualquiera de los casos anteriores. (RESPUESTA DEL API EN JSON)
					return $response;    
    }

    public function balanceaddress($api_key,$address)
    {
    	// buscamos el token {Api_key: parametro} en al base de datos
        $token = tokens::where('token.default','=', $api_key)->first();
        //verificamos que el token exista.
        if(!empty($token))
        {	
      		//indentificamos el usuario dueño del token.
        	$user = users::where('_id','=',$token->owner)->first();

        	if($user->status != 'suspend')
        	{
	        	$valided = addresses::where('address','=',$address)->first();
	        	if (!empty($valided)) 
	        	{
	        		# code...
	        	
		    	$this->wallet->start($token->guid['default'],$token->guid['psw']);
			    //Creamos y recojemos los datos devueltos por BlockChain
			    $response = $this->wallet->balanceAddress($address);
			    	//verificamos que nos devolvio una respuesta esperada.
				    if (isset($response->address)) 
				    {		
				    	//buscamos la transaccion y actualizamos el saldo de esta.
				    	$address = addresses::where('address','=',$response->address)->first();
				    	$address->balance = $response->balance;
				    	$address->balance_pending = $response->balance_pending;
				    	$address->save();
				    	//mostramos el resultado de la consulta.
				    	$response = json_encode(array('status'=>'success','data'=>$response));
				    }
				    else 
				    {
				    	//esto pasa si no devuelve un resultado esperado o la consulta no pudo realizarse y devuelve el mensaje de error si existe..
				    	$response = json_encode(array('status'=>'success','data'=>['error_message'=>$response]));
				    }   
				}
				else
				{
				    $response = json_encode(array('status'=>'fail','data'=>['error_message'=>'address does not exist in the wallet']));
				} 
			}
			else
			{
				//esto pasa si el usuario tiene la cuenta suspendida.
		    	$response = json_encode(array('status'=>'fail','data'=>['error_message'=>'have problems with your account you are:{'.$user->status
		    	.'} Get in touch with the administration.']));
			}
   		}
   		else
   		{
   			//falta el parametro Api_key y se le hace saber al usuario.
		    $response = json_encode(array('status'=>'fail','data'=>['error_message'=>'Invalid value for parameter {Api_key} provided.']));
   		}

    	return $response;
    }

    public function list_addresses($api_key,$pin)
    {
    	$token = tokens::where('token.default','=', $api_key)->first();
    	if(!empty($token))
        {
        	if ($token->token['pin'] == $pin) 
        	{

	        	$this->wallet->start($token->guid['default'],$token->guid['psw']);
	    		$response= $this->wallet->listAddress();
		    	if (isset($response[0]->address))
		    	{
		    		//Todo OK devuelve todas las direcciones en formato JSON
		    		$response = json_encode(array('status'=>'success','data'=>['addresses'=>$response]));
		    	}
		    	else
		    	{
		    		//si por algun error no devuelve las direcciones.
		    		$response = json_encode(array('status'=>'fail','data'=>['error_message'=>$response]));
		    	}
        	}

        	else
        	{
        		//si el pin del usuarios/Token es erroneo.
                $response = json_encode(array('status'=>'fail','data'=>['error_message'=>'Invalid value for parameter {pin} provided.']));
        	}
       
    	}

    	else
    	{
         	//Si el Api_key/token del usuario no existe.
    		$response = json_encode(array('status'=>'fail','data'=>['error_message'=>'Invalid value for parameter {Api_key} provided.']));
    	}
    	return $response;
    }

    public function send($api_key,$pin,$from,$to,$amount,$fee)
    {	
    	//verifica que el token/Api_key exista.
    	$token = tokens::where('token.default','=', $api_key)->first();
    	if(!empty($token))
    	{
    		//verificamos que tenga el pin correcto.
    		if ($token->token['pin'] == $pin) 
        	{
        		//verificamos si la direccion existe remitente existe.
        		$address = addresses::where('address','=',$from)->first();
        		if (!empty($address->address)) 
        		{		
        			//verificamos que sea el dueño de la direccion que envia.
        			if ($address->owner == $token->_id) 
        			{	
        				$this->wallet->start($token->guid['default'],$token->guid['psw']);
        				if ($address->total_available > $amount) 
        				{
        					$response= $this->wallet->enviar($from,$to,$amount,$fee);
        				}
        				else
        				{
							$response='Insufficient funds<br/>';
        				}
							//se verifica que nos devolvio el mensaje y que esta todo bien.
						if (isset($response->message)) 
						{	$lighter = true;
							$reg_transaction = new transactions;
							$reg_transaction->who_send = $from;
							$reg_transaction->who_received = $to;
							$reg_transaction->amount = $amount;
							$reg_transaction->fee = $response->fee;
							$reg_transaction->hash = $response->tx_hash;
							//$reg_transaction->execution_send= date('');
							$reg_transaction->owner = $address->_id;
							$reg_transaction->network= 'btc';
							$reg_transaction->save();
							$reg_transaction->_id= ['type'=>'btc'];					    								 																					//mostramos los datos de la transferencia.
							$response = json_encode(array('status'=>'success','data'=>$response));
						}
						else
						{
							//verificamos si el caso es de "no tener fondos para la transaccion"
							if ($response=='Insufficient funds<br/>') 
							{

								$Amount_aviable = $this->wallet->balanceAddress($from);
								//pasa si no tiene el saldo suficiente a enviar.
								$response = json_encode(array('status'=>'fail','data'=>['error_message'=>$response,'balance_pending'=>$Amount_aviable->balance_pending,'total_available'=>$Amount_aviable->balance]));
								
							}
							else
							{
								//Si no se pudo realizar la transaccion muestra el status y el mensaje de error
								$response = json_encode(array('status'=>'fail','data'=>['error_message'=>$response]));
							}
						}
        			}
        			else
        			{
        				//mensaje si quiere acceder a una direccion que no es propiedad de la wallet
    					$response = json_encode(array('status'=>'fail','data'=>['error_message'=>'You are not the owner of this address.']));
        			}
        		}
        		else
        		{
        			//pasa si no se existe la direccion en la base de datos.
    				$response = json_encode(array('status'=>'fail','data'=>['error_message'=>'The address does not exist in this wallet. Invalid value for parameter {from} provided.']));
        		}
			    
			}
			else
			{
        		//si el pin del usuarios/Token es erroneo.
                $response = json_encode(array('status'=>'fail','data'=>['error_message'=>'Invalid value for parameter {pin} provided.']));	
			}	
    	}
    	else
    	{
    		//Si el Api_key/token del usuario no existe.
    		$response = json_encode(array('status'=>'fail','data'=>['error_message'=>'Invalid value for parameter {Api_key} provided.']));
    	}
    	//devulve la respuesta en cualquiera de los casos.
    	return $response;
    	if ($lighter) 
    	{
			//actualizamos el saldo de la direccion.
			$Amount_aviable = $this->wallet->balanceAddress($from);
			$address->balance = $Amount_aviable->balance;
	    	$address->balance_pending = $Amount_aviable->balance_pending;
	    	$address->save();
    	} 
    }



}

