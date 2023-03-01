<?php

class Conta
{
    private Titular $titular;
    private float $saldoConta;
    private static int $numeroDecontas = 0;


    public function __construct(Titular $titular)
    {
        $this -> titular = $titular;
        $this-> saldoConta = 0;

        self::$numeroDecontas++;
    }

    public function __destruct()
    {
        self::$numeroDecontas--;
    }

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

        $this -> saca($valorATransferir);
        $contaDeDestino -> saldoConta += $valorATransferir;
    }


    public function recuperaSaldoConta ():float
    {
        return $this->saldoConta;
    }


    public static function recuperaNumeroDeContas () :int
    {
        return self::$numeroDecontas; //self funciona como se fosse o this, só que usado em atributos static
    }
}
