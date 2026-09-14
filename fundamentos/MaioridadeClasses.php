<?php 
    class pessoas {
        private $idade;
        private $nome;

        public function __construct($idade, $nome){
            $this->idade = $idade;
            $this->nome = $nome;
        }
        public function apresentar(){
            echo "Oi, eu sou {$this->nome} e tenho {$this->idade} anos.\n";
        }
        public function verificarMaioridade(){
            if($this->idade < 18){
                echo "menor de idade\n";
            } else {
                echo "maior de idade\n";
            }
        }
        public function fazerAniversario(){
            $this->idade++;
            echo "Depois do aniversário:\n";
            echo "oi, eu sou {$this->nome} e tenho {$this->idade} anos.\n";
            $this->verificarMaioridade();


        }

    }

    $pessoa1 = new pessoas(17, "otavio");
    $pessoa1->apresentar();
    $pessoa1->verificarMaioridade();
    $pessoa1->fazerAniversario();