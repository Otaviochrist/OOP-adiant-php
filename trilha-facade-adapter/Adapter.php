<?php
class fonte110 {
    public function fornecer110(){
        return "110v";
    }
}
class aparelho {
    public function Ligar($adaptador){
        echo "Aparelho ligado em " . $adaptador->fornecer220();
    }
}

class adaptadorTomada {
    public function __construct(private fonte110 $fonte){}
    public function fornecer220(){
    $this->fonte->fornecer110();
    return "220V";
    }
}

$fonte = new fonte110();
$adaptador = new adaptadorTomada($fonte);
$aparelho = new aparelho();
$aparelho->Ligar($adaptador);