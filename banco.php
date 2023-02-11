<?php

require_once 'src/Conta.php';

$contaUm = new Conta();

$contaUm -> deposita(900);
$contaUm -> saca(30);

echo $contaUm -> recuperaSaldoConta();
