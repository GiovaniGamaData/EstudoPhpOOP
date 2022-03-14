<?php

require 'src/Conta.php';

$conta = new Conta();

$conta->nomeTitular = "Giovani Gama";
$conta->cpfTitular = "12345678910";
$conta->saldoTitular = 0;

$conta2 = new Conta();

$conta2->nomeTitular = "Giovani silva";
$conta2->cpfTitular = "12345678911";
$conta2->saldoTitular = 40000;


$a = 2;
$b = $a;
$b++;


$c = $conta;
$c->saldo = 200000000;

echo "$a e $b e " . PHP_EOL;

var_dump($conta, $conta2, $c);
echo "Seu nome :$conta->nomeTitular Seu cpf: $conta->cpfTitular Seu saldo: $conta->saldoTitular" . PHP_EOL;
echo "Seu nome :$conta2->nomeTitular Seu cpf: $conta2->cpfTitular Seu saldo: $conta2->saldoTitular" . PHP_EOL;

?>