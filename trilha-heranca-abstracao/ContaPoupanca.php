<?php

require_once __DIR__ . '/Conta.php';

class ContaPoupanca extends Conta {
    public function taxa(): float {
    return $this->saldo * 0.005;
    }
}
