<?php

  class pessoa {
    Public $nome;
    Public $idade;

    public function apresentar(){
      echo "Oi, eu sou $this->nome e tenho $this->idade de idade!\n";
    }
  }

 $pesssoa1 = new pessoa();
 $pesssoa1 -> nome = "Ana";
 $pesssoa1 -> idade = 12;
 $pesssoa1->apresentar();
 $pessoa2 = new pessoa();
 $pessoa2-> nome = "otavio";
 $pessoa2->idade = 18;
 $pessoa2-> apresentar();
