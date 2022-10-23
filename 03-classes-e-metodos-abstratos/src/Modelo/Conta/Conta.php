<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{

    private $titular;
    private float $saldo;
    private static $numeroDeContas = 0;
    private $tipo;

    /*
     * $tipo 1 == Conta Corrente; 2 == Conta Poupança
     */

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2) {
            echo "Há mais de uma conta ativa";
        }
    }

    public function saca(float $valorASacar): void
    {
        if($this->tipo === 1) {
            $tarifaDeSaque = $valorASacar * 0.05;
        } else {
            $tarifaDeSaque = $valorSaque = 0.03;
        }

        $valorSaque = $valorASacar + $tarifaDeSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}