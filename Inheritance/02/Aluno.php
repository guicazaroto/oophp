<?php
class Aluno extends Pessoa {
  private $matricula;
  private $curso;

  public function pagarMensalidade() {
    echo 'mensalidade aluno comum';
  }
}