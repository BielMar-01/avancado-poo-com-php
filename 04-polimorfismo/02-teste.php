
<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;


$funcinario1 = new Funcionario('Gabriel Marques', new CPF('123.456.789-10'), 'Dev', 1000);

$funcinario2 = new Funcionario('Pedro Lucas', new CPF('456.789.123-11'), 'Gerente', 3000);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($funcinario1);
$controlador->adicionarBonificacaoDe($funcinario2);

echo $controlador->recuperaTotal();

