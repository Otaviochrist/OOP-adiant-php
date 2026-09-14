<?php
class funcionario {
    public function __construct(private string $nome){
    }
    public function getNome(){return $this->nome;}
}

class Departamento {
    private array $funcionarios = [];
    public function __construct(private string $nome){
    }
    public function adicionarFuncionario(funcionario $funcionario){
      $this->funcionarios[] = $funcionario;
    }
    public function listar(){
      echo "Setor: {$this->nome}\n";
        foreach ($this->funcionarios as $funcionario){
          echo"{$funcionario->getNome()} \n";
        }
    }

}

$pessoa1 = new funcionario ("otavio");
$pessoa2 = new funcionario ("Maria");
$pessoa3 = new funcionario ("ana");
$departamento1 = new Departamento ("TI");
$departamento2 = new departamento ("Marketing");
$departamento1->adicionarFuncionario($pessoa1);
$departamento1->adicionarFuncionario($pessoa3);
$departamento2->adicionarFuncionario($pessoa2);
$departamento1->listar();
echo"<----------->\n";
$departamento2->listar();



