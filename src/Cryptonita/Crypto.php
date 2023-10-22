<?php
namespace App\Cryptonita;
class Crypto{
    private $encrypt_method;
    private $secret_iv;
    private $hash;
    public function __construct(){
        $configFilePath = __DIR__ . '/config.php';
        $config = require $configFilePath;
        $this->encrypt_method = METHOD;
        $this->secret_iv = SECRETIV;
        $this->hash = HASH;
        
        }
        public function hidden($string,$action) {
            $output = false;
            $key = hash($this->hash, $this->secret_iv);
            $iv = substr(hash($this->hash, $this->secret_iv), 0, 16);
                if ( $action == 1 ) {
                    $output = openssl_encrypt($string, $this->encrypt_method, $key, 0, $iv);
                    $output = base64_encode($output);
                } elseif( $action == 2 ) {
                    $output = openssl_decrypt(base64_decode($string), $this->encrypt_method, $key, 0, $iv);
                }
            return $output;
        }
}