<?php
class Pessoa { 
public $nome;
public $idade;

public function __construct ($nome, $idade) {
$this->nome = $nome;
$this->idade = $idade;
  }

public function getDetalhes() {
  return "Prazer meu nome é"; $this->nome . "e minha idade é " . $this->idade;
  }

}
$meuPessoa = new Pessoa("Miguel", "17");
echo $meuPessoa->getDetalhes();
?>
