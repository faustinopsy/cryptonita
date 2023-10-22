<?php
require __DIR__ ."/vendor/autoload.php";

use App\Cryptonita\Crypto;

$cripto = new Crypto();
$nome="XXXXXXX faustino";
$email="XYZZZ@gmail.com";
$likedin="https://www.linkedin.com/in/XXXXXXXX/";
$site="https:XXXXXXXX.com";
$data=[$nome,$email,$likedin,$site];
$criptografado=[];
// resultado criptografado hidden(string, 1=criptgrafa)
foreach ($data as $key => $value) {
    $criptografado []= $cripto->hidden($value,1);
}
echo "-------Resultado Criptografia---------------------";
var_dump($criptografado);
echo "--------------------------------------------------";
// resultado Descriptografado hidden(string, 2=descriptgrafa)
$descriptografado=[];
foreach ($criptografado as $key => $value) {
    $descriptografado[]= $cripto->hidden($value,2);
}
echo "------Resultado Descriptografia-------------------";
var_dump($descriptografado);
echo "--------------------------------------------------";