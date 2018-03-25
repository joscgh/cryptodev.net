<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    require_once(__DIR__.'/vendor/autoload.php');

    class wallet extends Controller
    {
        private $crypto;
        private $api_code;

        public function __construct() 
        {
            $this->api_code = "1770d5d9-bcea-4d28-ad21-6cbd5be018a8";
            $Blockchain = new \Blockchain\Blockchain($this->api_code);
            $Blockchain->setServiceUrl("http://localhost:3000");
            
            $this->crypto = $Blockchain;
        }

        public function estadisticas() 
        {
            $stats = $this->crypto->Stats->get();
            return $stats;
        }

        public function idmonedero() 
        {
            $id = $this->crypto->Wallet->getIdentifier();
            return $id;
        }

        public function start($wallet_guid, $wallet_pass) 
        {
            try {
                $this->crypto->Wallet->credentials($wallet_guid, $wallet_pass);
             } catch (\Blockchain\Exception\ApiError $e){
                 return $e->getMessage() . '<br />';
             }
        }

        public function btc_dolar($btc,$coin) 
        {
            try {
                $response = $this->crypto->Rates->fromBTC($btc,$coin);
                return $response;
            } catch (\Blockchain\Exception\ApiError $e) {
                 return $e->getMessage() . '<br />';
            }
        }

        public function balance() 
        {
            try {
                $response = $this->crypto->Wallet->getBalance();
                return $response;
            } catch (\Blockchain\Exception\ApiError $e) {
                return $e->getMessage() . '<br />';
            }
        }

        public function balanceAddress($direccion) 
        {
            try {
                $response = $this->crypto->Wallet->getAddressBalance($direccion);
                return $response;
            } catch (\Blockchain\Exception\ApiError $e) {
                return $e->getMessage() . '<br />';
            }
        }

        public function hash160address($address)
        {
            try 
            {
                $response = $this->crypto->Explorer->getHash160Address($address);
                return $response;
            } 
            catch(\Blockchain\Exception\ApiError $e) 
            {
                return $e->getMessage() . '<br />';
            }
        }

        public function crear($password, $correo, $label) 
        {
            $response = $this->crypto->Create->create($password, $correo = null, $label);
            return $response;
        }

        public function enviar($remitente ,$direccion, $monto, $comision ) 
        {
            

            try {
                $response = $this->crypto->Wallet->send($direccion, $monto, $remitente , $comision );
                return $response;
            } catch (\Blockchain\Exception\ApiError $e) {
                return $e->getMessage().'<br/>';
            }
        }

        public function enviar_varios($direccion_arr, $remitente, $comision = null) 
        {
            $response = $this->crypto->Wallet->sendMany($direccion_arr, $remitente, $comision);
            return $response;
        }

        public function getTransaccion($hash) 
        {
            $response = $this->crypto->Explorer->getTransaction($hash);
            return $response;
        }

        public function transUnconfirmed() 
        {
            $unconfirmed = $this->crypto->Explorer->getUnconfirmedTransactions();
            return $unconfirmed;
        }

        public function listAddress() 
        {
            $address = $this->crypto->Wallet->getAddresses();
            return $address;
        }

        public function newAddress($label = null) 
        {
            try {
                $address = $this->crypto->Wallet->getNewAddress($label);
                return $address;
                } catch (\Blockchain\Exception\ApiError $e) {
                 return $e->getMessage().'<br />';
            }
        }
        public function Xpub($xpub)
        {
            try {
                $xpub_summary = $this->crypto->Explorer->getXpub($xpub);
                return $xpub_summary;
            } catch(\Blockchain\Exception\ApiError $e){
                 return $e->getMessage().'<br/>';
            }
        }
        public function archiveAddress($archAddress) 
        {
            try {
                $address = $this->crypto->Wallet->archiveAddress($archAddress);
                return $address;
            } catch (\Blockchain\Exception\ApiError $e) {
                 return $e->getMessage().'<br/>';
            }
        }

        public function unArchiveAddress($Address) 
        {
            try {
                $address = $this->crypto->Wallet->unarchiveAddress($Address);
                return $address;
            } catch (\Blockchain\Exception\ApiError $e) {
                 return $e->getMessage().'<br/>';
            }
        }
    }