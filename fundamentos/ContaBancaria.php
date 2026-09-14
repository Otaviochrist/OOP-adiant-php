<?php 
    class ContaBancaria {
        private $titular;
        private $saldo;

        public function depositar($valor){
            if ($valor > 0){
               $this->saldo = $this->saldo + $valor;
            } else {
                echo "Valor de deposito Invalido";
            }
        }
        Public function getSaldo(){
            return $this->saldo;
            
        }

        public function sacar($valor){
            if($valor > 0  && $valor <= $this->saldo){
                $this->saldo = $this->saldo - $valor;
                echo "Saque realizado com sucesso\n";
            } if($valor < 0){
                echo "Valor de saque inválido\n";
            } if($valor > $this->saldo){
                echo "Saldo insuficiente\n";
            }
        }
    }

$conta = new contaBancaria("Otavio");
$conta->depositar(100);
$conta->sacar(-12);
$conta->sacar(10);
$conta-> getsaldo();
echo "Saldo atual: " . $conta->getSaldo() . "\n";