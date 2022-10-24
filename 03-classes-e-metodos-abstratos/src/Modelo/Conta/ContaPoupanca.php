<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function saca(float $valorASacar): void
    {
        $tarifaDeSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaDeSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }

        $this->saldo -= $valorSaque;
    }
}