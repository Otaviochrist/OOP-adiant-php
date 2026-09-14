<?php
class Cliente {
  public function __construct(private string $nome){
  }
  public function getNome(){
    return $this->nome;
  }

}

class Pedido {
  public function __construct(private int $numero, private float $valor, private Cliente $cliente){
  }
  public function resumo(){
    echo "Pedido {$this->numero} de {$this->cliente->getNome()}: R$ {$this->valor} ";
  }

}

$pessoa1 = new cliente("maria");
$pedido1 = new pedido(10 , 12.90 , $pessoa1);
$pedido1->resumo();

