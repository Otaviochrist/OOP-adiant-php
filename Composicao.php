<?php
class ItemPedido {
  public function __construct(private string $nome, private int $quantidade, private float $preco){}

  public function getSubTotal(){
    $subtotal = $this->quantidade * $this->preco;
    return $subtotal;
  }

  public function getNome(){
    return $this->nome;
  }

}

class Pedido {
  private array $itens = [];
  public function __construct(private int $numero){}

  public function adicionarItem(string $nome, int $quantidade, float $preco){
    $this->itens[] = new ItemPedido($nome, $quantidade, $preco);
  }

  public function calcularTotal(){
    $total = 0;
    foreach ($this->itens as $item){
      $total += $item->getSubTotal();
    }
    return $total;
  }


  public function resumo(){
    echo"Pedido: {$this->numero}\n";
    foreach ($this->itens as $item){
      $item->getSubTotal();
      echo"{$item->getNome()}: R$ {$item->getSubtotal()}\n";
    }
    echo "Total: R$ {$this->calcularTotal()}\n";
 }
}

$pedido1 = new Pedido(201);
$pedido1->adicionarItem("Caderno", 2, 15.50);
$pedido1->adicionarItem("Caneta", 3, 4.00);
$pedido1->resumo();

