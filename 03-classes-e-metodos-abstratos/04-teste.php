
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-99'),
        'Gabriel',
        new Endereco('Sao Paulo', 'Bairro Teste', 'Rua um', '37')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;;

echo "======================================" . PHP_EOL;

$contaPopanca = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-99'),
        'Gabriel',
        new Endereco('Sao Paulo', 'Bairro Teste', 'Rua um', '37')
    )
);

$contaPopanca->deposita(500);
$contaPopanca->saca(100);

echo $contaPopanca->recuperaSaldo();




