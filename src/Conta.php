<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldoConta = 0;

    public function sacar ($valorSacar):void
    {
        if ($valorSacar > $this -> saldoConta) {
            echo 'Saldo insuficiente';
            return;
        }
        
        $this -> saldoConta -= $valorSacar;
    }



    public function depositar ($valorDeposito):void
    {
        if ($valorDeposito < 0) {
            echo 'O valor precisa ser positivo';
            return;
        }

        $this -> saldoConta += $valorDeposito;
    }
    

    public function transferir ($valorATransferir, Conta $contaDeDestino):void
    {
        if ($valorATransferir > $this -> saldoConta) {
            echo 'Saldo insuficiente!';
            return;
        }

        $this -> sacar($valorATransferir);
        $contaDeDestino -> saldoConta += $valorATransferir;
    }
    
}
