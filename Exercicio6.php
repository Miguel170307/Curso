<?php
class Animal { 
public $espécie;


public function espécie ($espécie) {
    echo $this->espécie = $espécie;
}

public function EmitirSom() {
  echo "auauaua";
  }
  
}
class Cachorro extends Animal {
    public function emitirSom() {
      echo "latido";
    }
  }

  $meuCachorro = new Cachorro();
  $meuCachorro->emitirSom() ;



?>
