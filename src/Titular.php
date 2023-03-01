<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this-> cpf = $cpf;
        $this-> validaNome($nome);
    }

    public function recuperaCpf():string
    {
        return $this-> cpf;
    }

    public function recuperaNome():string
    {
        return $this-> nome;
    }


    private function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo 'O nome precisa ter pelo menos 5 caracteres.';
            exit();
        }
    }
}