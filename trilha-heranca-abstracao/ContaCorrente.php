<?php

require_once __DIR__ . '/Conta.php';

class ContaCorrente extends Conta {
    public function taxa(): float {
        return $this->saldo*0.02;
      }
}
