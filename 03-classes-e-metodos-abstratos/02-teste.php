
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-99'),
        'Gabriel',
        new Endereco('Sao Paulo', 'Bairro Teste', 'Rua um', '37')
    ),
    1
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();




