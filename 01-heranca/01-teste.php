
<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$endereco = new Endereco('São Paulo', 'Um bairro', 'Rua 1', '68C');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo "===================================" . PHP_EOL;

$patricia = new Titular(new CPF('987.654.321-00'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

echo "===================================" . PHP_EOL;

echo Conta::recuperaNumeroDeContas();