
<?php

require 'src/Pessoa.php';
require 'src/Funcionario.php';
require 'src/CPF.php';

$umFuncionario = new Funcionario('Gabriel', new CPF('123.456.789-99'), 'Dev Junior');
var_dump($umFuncionario);

