<?php
class Mamifero extends Animal {
  private $corPelo;
  public function mover() {
    echo 'Correndo....';
  }

  public function alimentar()
  {
    echo 'Comendo ....';
  }

  public function emitirSom()
  {
   echo 'Gritando...'; 
  }
}