<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionarBonificacaoDe(Funcionario $funcionario)
    {
    $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}