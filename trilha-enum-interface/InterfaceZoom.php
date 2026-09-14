<?php
interface temValor {
    public function getValor(): float;
}

class ContaLuz implements temValor {
    public function __construct(private float $valor){}

    public function getValor(): float {
        return $this->valor;
    }
}

class Uber implements temValor {
    public function __construct(private float $valor){}

    public function getValor(): float {
        return $this->valor;
    }
}

$total= 0;
class Despesas {
    private array $itens = [];

    public function adicionar(temValor $item){
        $this->itens[] = $item;
    }
    public function total(){
        $total= 0;
        foreach ($this->itens as $item) {
        $total += $item->getValor();
        }
    return $total;
    }
}
$despesas1 = new Despesas();
$despesas1->adicionar(new ContaLuz(120));
$despesas1->adicionar(new Uber(35));
echo $despesas1->total();
