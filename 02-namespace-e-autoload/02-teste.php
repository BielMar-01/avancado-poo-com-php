
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\CPF;


$umFuncionario = new Funcionario('Gabriel', new CPF('123.456.789-99'), 'Dev Junior');
var_dump($umFuncionario);

