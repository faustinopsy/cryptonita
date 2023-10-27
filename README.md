# CryptoPHP Documentação

## Indice
- [Descrição](#descrição)
- [Início Rápido](#início-rápido)
  - [Pré-requisitos](#pré-requisitos)
  - [Instalação](#instalação)
- [Uso](#uso)
  - [Criptografar Informações](#criptografar-informações)
  - [Descriptografar Informações](#descriptografar-informações)
- [Exemplo Completo](#exemplo-completo)
- [Contribuindo](#contribuindo)
- [Licença](#licença)

---

## Descrição
A classe `Crypto` é responsável por encriptar e descriptar informações usando a criptografia OpenSSL.
(criptografia simétrica) como o proposito exclusivo de esconder as informações no banco de dados e usar a mesma chave para mostrar os dados na aplicação

---

## Início Rápido
- clone o repositório (git clone https://github.com/faustinopsy/criptonita)
- composer install

### Pré-requisitos
- Composer e autoloader configurado.
- Arquivo `config.php` com as constantes `METHOD`, `SECRETIV` e `HASH` definidas.

### Instalação
```php
require __DIR__ ."/vendor/autoload.php";
use App\Cryptonita\Crypto;
```
### Uso
- Criptografar Informações
- Para criptografar informações, instancie a classe Crypto e utilize o método hidden passando o valor 1 como segundo argumento:
```php
$cripto = new Crypto();
$nome = "XXXXXXX faustino";
$criptografado = $cripto->hidden($nome, 1);
```
- Descriptografar Informações
- Para descriptografar, utilize o método hidden passando o valor 2 como segundo argumento:
```php
$nomeDescriptografado = $cripto->hidden($criptografado, 2);
```
### Exemplo Completo
```php
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
```
### Contribuindo
- Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou um pull request.

### Licença
O Cripto é licenciado sob a licença MIT. 
