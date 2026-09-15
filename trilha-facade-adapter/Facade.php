<?php
// Facade — viagem
//
// Passagem::comprar, Hotel::reservar e Seguro::contratar são três classes soltas.
// PacoteViagem esconde as três: um único reservarPacote($destino)
// compra passagem, reserva hotel e contrata seguro.
//
// php trilha-facade-adapter/Facade.php
// esperado:
// Passagem para Recife
// Hotel em Recife
// Seguro para Recife
// Pacote reservado.

class passagem {
    public function comprar($destino){
        echo "Passagem para " . $destino . "\n";
    }
}

class hotel {
    public function reservar($destino){
        echo "Hotel para " . $destino . "\n";
    }
}

class seguro {
    public function contratar($destino){
        echo "Seguro para " . $destino . "\n";
    }

}
class pacoteViagem{
    public function __construct(private passagem $comprar, private hotel $reservar, private seguro $contratar){}

    public function reservarPacote($destino){
        $this->comprar->comprar($destino) ;
        $this->reservar->reservar($destino);
        $this->contratar->contratar($destino);
    }
}

$viagemMarcada = new pacoteViagem(new passagem(), new hotel(), new seguro());
$viagemMarcada->reservarPacote("Recife");