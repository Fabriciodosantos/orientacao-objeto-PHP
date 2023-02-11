<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldoConta = 0;

    public function saca ($valorSacar):void
    {
        if ($valorSacar > $this -> saldoConta) {
            echo 'Saldo insuficiente';
            return;
        }
        
        $this -> saldoConta -= $valorSacar;
    }



    public function deposita ($valorDeposito):void
    {
        if ($valorDeposito < 0) {
            echo 'O valor precisa ser positivo';
            return;
        }

        $this -> saldoConta += $valorDeposito;
    }
    

    public function transfere ($valorATransferir, Conta $contaDeDestino):void
    {
        if ($valorATransferir > $this -> saldoConta) {
            echo 'Saldo insuficiente!';
            return;
        }

        $this -> sacar($valorATransferir);
        $contaDeDestino -> saldoConta += $valorATransferir;
    }
    
    public function defineCpfTitular ($cpf):void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular () : string
    {
        return $this->cpfTitular;
    }


    public function defineNomeTitular ($nome):void
    {
        $this->nomeTitular = $nome;
    }
     
    public function recuperaNomeTitular ():string
    {
        return $this-> nomeTitular;
    }


    public function recuperaSaldoConta ():float
    {
        return $this->saldoConta;
    }
}
