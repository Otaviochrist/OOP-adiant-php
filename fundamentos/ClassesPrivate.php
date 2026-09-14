<?php
  class contaBancaria {
    Private $saldo;

    Public function depositar($valor){
      if ($valor > 0){
        $this->saldo = $this->saldo + $valor;
      } else {
        echo "Valor de deposito Invalido";
      }
     }
      Public function getSaldo(){
        return $this->saldo;
      }
    }

  $saldoNovo = new contaBancaria ();
  $saldoNovo->depositar(10);
  $saldoNovo->depositar(12);
  echo "Saldo final: " . $saldoNovo->getSaldo() . "$\n";