<?php


abstract class Conta {
    public function __construct(protected float $saldo) {
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    abstract public function taxa(): float;
}
