<?php

/*
  NÍVEL 3: visibilidade assimétrica + a mesma ponte TemValor

  Faça este DEPOIS de InterfaceZoom.php.
  Precisa PHP 8.4+ (nesta máquina: 8.5).

  Continua: Despesas só aceita TemValor (luz e uber entram).

  Novo: o valor lê de FORA, grava só DENTRO da classe.
    public private(set) float $valor
    - $luz->valor           → ler ok
    - $luz->valor = 0       → de fora ERRO
    - getValor() devolve $this->valor

  1) interface TemValor
     - getValor(): float

  2) ContaLuz e Uber implements TemValor
     - public private(set) float $valor   (promoção no construtor)
     - getValor(): return $this->valor

  3) Despesas — igual ao nível 2
     adicionar(TemValor $item), total()

  4) $luz = new ContaLuz(120);
     echo $luz->valor;                    ← 120 (ler)
     $despesas = new Despesas();
     $despesas->adicionar($luz);
     $despesas->adicionar(new Uber(35));
     echo $despesas->total();             ← 155
     // $luz->valor = 0;                  ← deixe comentado
*/

interface TemValor {
    public function getValor(): float;
}

class ContaLuz implements TemValor {
    public function __construct(public private(set) float $valor){}
    public function getValor(): float {
    return $this->valor;
    }
}

class Uber implements TemValor {
  public function __construct(public private(set) float $valor){}
  public function getValor(): float {
  return $this->valor;
  }
}


class Despesas {
    private array $item = [];

    public function adicionar(temValor $item) {
      $this->item[] = $item;
    }
    public function total(){
        $total= 0;
        foreach ($this->item as $item) {
        $total += $item->getValor();
        }
    return $total;
    }
  }

  $luz = new ContaLuz(120);
     echo $luz->valor . "\n";
     $despesas = new Despesas();
     $despesas->adicionar($luz);
     $despesas->adicionar(new Uber(35));
     echo $despesas->total();
