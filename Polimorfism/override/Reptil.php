<?php
class Reptil extends Animal {
  private $corEscama;

  public function mover() {
    echo 'Arrastando....';
  }

  public function alimentar()
  {
    echo 'Engolindo ....';
  } 

  public function emitirSom()
  {
   echo 'Som de cobra...'; 
  }

  public function enrolar() {
    echo 'enrolando..';
  }
}