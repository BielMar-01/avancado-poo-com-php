
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\CPF;


$desenvolver = new Desenvolvedor('Gabriel', new CPF('123.456.879-10'), 2000);

echo $desenvolver->nome;

