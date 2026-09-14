<?php
class Conta {
    public function __construct(protected float $saldo){
    }
    public function getSaldo(){
      return $this->saldo;
    }
    public function taxa(){
      return 0;
    }
}

class ContaCorrente extends Conta {
    public function taxa(){
      return $this->saldo*0.02;
    }
}

class ContaPoupanca extends Conta {
  public function taxa(){
    return $this->saldo*0.005;
  }
}

$contas = [
  new ContaCorrente(1000),
  new ContaPoupanca(1000),
];
  foreach ($contas as $conta){
    echo "{$conta->getSaldo()} e {$conta->taxa()}\n";
  }
