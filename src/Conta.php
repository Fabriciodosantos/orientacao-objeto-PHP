<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldoConta;

    public function sacar ($valorSacar):void
    {
        if ($valorSacar > $this -> saldoConta) {
            echo 'Saldo insuficiente';
        } else {
            $this -> saldoConta -= $valorSacar;
        }
    }


    public function depositar ($valorDeposito):void
    {
        if ($valorDeposito < 0) {
            echo 'O valor precisa ser positivo';
        } else {
            $this -> saldoConta += $valorDeposito;
        }
    }
}
