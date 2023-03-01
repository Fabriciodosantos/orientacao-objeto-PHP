<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';


$titularFabricio = new Titular ('18115151515', 'Fabricio');

$contaUm = new Conta($titularFabricio);


echo Conta::recuperaNumeroDeContas();
