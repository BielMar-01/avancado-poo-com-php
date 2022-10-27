
<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, EditorVideo, Gerente, Diretor};
use Alura\Banco\Service\Autenticador;


$autenticador = new Autenticador();
$funcionario1 = new Diretor('Pedro Augusto', new CPF('123.456.879-09'), 10000);

$autenticador->tentaLogin($funcionario1, '4321');

