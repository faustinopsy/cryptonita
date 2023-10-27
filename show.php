<?php
require __DIR__ ."/vendor/autoload.php";

use App\Cryptonita\Crypto;

$cripto = new Crypto();
$cripto2 = new Crypto();
$nome="php é uma linguagem de programação sem igual para web";
$resultado = $cripto->hidden($nome);

// resultado criptografado hidden(string, 1=criptgrafa)
echo "\n Criptografado: ".$resultado;

// resultado Descriptografado hidden(string, 2=descriptgrafa)
$resultado = $cripto2->show($resultado);
echo "\n Descriptogrado: ".$resultado;