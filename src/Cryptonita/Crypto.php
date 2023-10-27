<?php
namespace App\Cryptonita;
class Crypto{
    private $encrypt_method;
    private $secret_key;
    private $hash;
    public function __construct(){
        $this->encrypt_method = 'AES-256-CBC';
        // essa chave pode ficar estatica, pois o que faz a diferença é o IV
        $this->secret_key ="56032ef690f523e173ff37a11ce59654bfecab6d939e7e99d725af713ce82b0c";
        $this->hash = 'sha256';
        
        }
        public function hidden($string) {
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($this->encrypt_method));
            $key = hash($this->hash, $this->secret_key);
            $encryptedText = openssl_encrypt($string, $this->encrypt_method, $key, 0, $iv);
            // Adciona o IV junto com o texto
            $output = base64_encode($iv . $encryptedText);
            return $output;
        }
        public function show($string) {
            $key = hash($this->hash, $this->secret_key);
            $ivSize = openssl_cipher_iv_length($this->encrypt_method);
            // Extrai o IV do texto para descriptografar
            $decodedText = base64_decode($string);
            $iv = substr($decodedText, 0, $ivSize);
            $encryptedText = substr($decodedText, $ivSize);
            // Descriptar de fato
            $output = openssl_decrypt($encryptedText, $this->encrypt_method, $key, 0, $iv);
            return $output;
        }
}