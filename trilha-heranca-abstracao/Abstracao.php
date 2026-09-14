<?php



require_once __DIR__ . '/ContaCorrente.php';
require_once __DIR__ . '/ContaPoupanca.php';

$total = 0;
$contas = [
  new ContaCorrente(1000),
  new ContaPoupanca(1000),
  ];
  foreach ($contas as $conta){
    $total += $conta->taxa();
  }
  echo "{$total}\n";



