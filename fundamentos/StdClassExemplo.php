<?php
class Pessoa {
    public function __construct(private string $nome, private int $idade){
    }

    public function apresentar(){
        echo "Oi, eu sou $this->nome e tenho $this->idade de idade";
    }

}

echo "--- stdClass criado na mão ---\n";
$pessoa = new stdClass();
$pessoa->nome = "Otávio";
$pessoa->idade = 18;
echo $pessoa->nome . " " . $pessoa->idade . "\n";

echo "--- Array convertido com (object) ---\n";
$dados = ["nome" => "Otávio", "idade" => 18];
$pessoa = (object) $dados;
echo $pessoa->nome . " " . $pessoa->idade . "\n";

echo "--- JSON vira stdClass ---\n";
$json = '{"nome":"Otávio","idade":18}';
$pessoa = json_decode($json);
echo $pessoa->nome . " " . $pessoa->idade . "\n";


echo "--- Classe própria (tipada) ---\n";
$pessoa = new Pessoa("Otávio", 18);
$pessoa->apresentar();

