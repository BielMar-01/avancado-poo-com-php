
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;


$endereco1 = new Endereco('São Paulo', 'Bairro Um', 'Rua Um', '171');
$endereco2 = new Endereco('Rio de Janeiro', 'Bairro Um e Dois', 'Rua Dois', '171A');


$endereco1->cidade = "Minas Gerais";

echo $endereco1;

