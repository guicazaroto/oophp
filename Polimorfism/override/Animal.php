<?php
abstract class Animal {
  protected $peso;
  protected $idade;
  protected $membros;

  abstract public function mover();
  abstract public function alimentar();
  abstract public function emitirSom();

}