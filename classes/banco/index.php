<?php
require_once 'Conta.php';

$p1 = new Conta; //Henri
$p2 = new Conta; //Eduarda

$p1->abrirConta("cc");
$p1->setNomePessoa("Henri");
$p1->setNumero("0001");
$p1->depositar("300");
$p1->pagarMensalidade();

$p2->abrirConta("cp");
$p2->setNomePessoa("Eduarda");
$p2->setNumero("0002");
$p2->depositar("500");
$p2->sacar("100");
$p2->pagarMensalidade();

print_r($p1);
/*Conta Object
(
    [numero] => 0001
    [tipo:protected] => cc
    [nomePessoa:Conta:private] => Henri
    [saldo:Conta:private] => 338
    [status:Conta:private] => 1
)*/

print_r($p2);
/*Conta Object
(
    [numero] => 0002
    [tipo:protected] => cp
    [nomePessoa:Conta:private] => Eduarda
    [saldo:Conta:private] => 530
    [status:Conta:private] => 1
)*/