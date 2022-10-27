
<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor};
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Conta\Titular;


$autenticador = new Autenticador();
$funcionario1 = new Diretor('Pedro Augusto', new CPF('123.456.879-09'), 10000);
$funcionario2 = new Gerente('Fabio Silva', new CPF('317.971.879-09'), 10000);
$titular1 = new Titular(new CPF('074.471.879-09'), 'Ana Camargo', new Endereco('Rua um', '44', 'sfa', 'safd'));

$autenticador->tentaLogin($funcionario1, '1234') . PHP_EOL;
$autenticador->tentaLogin($funcionario2, '4321') . PHP_EOL;
$autenticador->tentaLogin($titular1, 'abcd') . PHP_EOL;

