<?php 
require_once('classes\operacoes.php');
require_once('classes\contaCorrente.php');
require_once('classes\contaPoupanca.php');


echo "<br>Conta corrente<br>";
$contaCorrente  = new contaCorrente(150);
echo $contaCorrente->numeroConta();
$contaCorrente->Deposita('111000');
$contaCorrente->Sacar('1100');
$contaCorrente->recuperaSaldo();

echo "<br>Conta poupança<br>";
$contaPoupanca  = new contaPoupanca(50);
$contaPoupanca->numeroConta();
$contaPoupanca->Deposita('1000');
$contaPoupanca->Sacar('100');
$contaPoupanca->Transferencia(10,$contaCorrente);
$contaPoupanca->recuperaSaldo();

$contaCorrente->recuperaSaldo();
?>