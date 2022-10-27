
<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, EditorVideo, Gerente, Diretor};

$funcinario1 = new Gerente('Pedro Lucas', new CPF('456.789.123-11'),  4000);

$funcinario2 = new Diretor('Patricia Peroli', new CPF('789.789.123-11'), 10000);

$funcinario3 = new Desenvolvedor('Gabriel Marques', new CPF('123.456.789-10'), 5000);

$funcinario4 = new EditorVideo('Paloma Santos', new CPF('987.159.617-22'), 3500);

$funcinario3->sobreDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($funcinario1);
$controlador->adicionarBonificacaoDe($funcinario2);
$controlador->adicionarBonificacaoDe($funcinario3);
$controlador->adicionarBonificacaoDe($funcinario4);

echo $controlador->recuperaTotal();

