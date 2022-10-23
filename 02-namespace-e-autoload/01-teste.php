
<?php

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\CPF;

require 'src/Modelo/Pessoa.php';
require 'src/Modelo/Funcionario.php';
require 'src/Modelo/CPF.php';

$umFuncionario = new Funcionario('Gabriel', new CPF('123.456.789-99'), 'Dev Junior');
var_dump($umFuncionario);

