<?php

class pessoa {
    public function __construct(private string $nome, private int $idade){
    }

    public function apresentar(){
        echo"Oi, eu sou $this->nome e tenho $this->idade de idade";
    }
}
class ContaBancaria {
    public function __construct(private string $titular, private float $saldo = 0){
    }

    public function depositar(float $valor){
        if ($valor < 0){
            echo "valor invalido, valores menores que 0 não são aceitos!";
        } else {
            $this->saldo += $valor;
        }
     }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getTitular(){
        return $this->titular;
    }
}

$pessoa1 = new pessoa ("Otávio",18);
$pessoa1->apresentar();
echo "\n";
$conta = new ContaBancaria("Otavio", 50);
$conta->depositar(100);
echo"--------------------------------\n";
echo "         Titular: " . $conta->getTitular() . "\n";
echo "         Saldo: " . $conta->getSaldo() . "\n";
echo "--------------------------------\n";


