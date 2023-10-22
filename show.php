<?php
require __DIR__ ."/vendor/autoload.php";

use App\Cryptonita\Crypto;

$cripto = new Crypto();
$nome="php é uma linguagem de programação sem igual para web";
$resultado = $cripto->hidden($nome,1);

// resultado criptografado hidden(string, 1=criptgrafa)
echo "\n Criptografado: ".$resultado;

// resultado Descriptografado hidden(string, 2=descriptgrafa)
$resultado = $cripto->hidden($resultado,2);
echo "\n Descriptogrado: ".$resultado;