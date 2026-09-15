<?php

class dinheiroEmCentavos {
    public function cobrarCentavos(){
    return "1550";
    }
}

class Conversor {
  public function __construct(private dinheiroEmCentavos $valor){}
  public function dinheiroEmInteiro(){
    return $this->valor->cobrarCentavos() / 100;
  }
}

class loja {

  public function pagar($converter){
    echo "Pago: R$ " . $converter->dinheiroEmInteiro();
  }
}

$centavos = new dinheiroEmCentavos();
$converter = new conversor($centavos);
$loja = new loja();
$loja->pagar($converter);
