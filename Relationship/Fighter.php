<?php

class Fighter {
  private $name;
  private $nationality;
  private $age;
  private $height;
  private $weight;
  private $category;
  private $wins;
  private $draw;
  private $lose;

  function __construct (
    string $name, 
    string $nationality, 
    int $age,
    float $height,
    float $weight,
    int $wins = 0,
    int $draw = 0,
    int $lose = 0
  )
  {
    $this->name = $name;
    $this->nationality = $nationality;
    $this->age = $age;
    $this->height = $height;
    $this->setWeight($weight);
    $this->wins = $wins;
    $this->draw = $draw;
    $this->lose = $lose;

  }

  public function getName () : string {
    return $this->name;
  }

  public function setName (string $name) : void {
    $this->name = $name;
  }

  public function getNacionality () : string {
    return $this->nationality;
  }

  public function setNationality (string $nationality) : void {
    $this->nationality = $nationality;
  }

  public function getAge () : int {
    return $this->age;
  }

  public function setAge (string $age) : void {
    $this->age = $age;
  }

  public function getWeight () : float {
    return $this->weight;
  }

  public function setWeight (float $weight) : void {
    $this->weight = $weight;
    $this->setCategory($weight);
  }

  public function getHeight () : float {
    return $this->height;
  }

  public function setHeight (float $height) : void {
    $this->height = $height;
  }

  public function getCategory () : string  {
    return $this->category;
  }

  public function setCategory (float $weight) : void {
    if($weight < 52.2 ) {
      $this->category = 'Inválido';
    } elseif ($weight <= 70.3) {
      $this->category = 'Leve';
    }
    elseif ($weight <= 83.9) {
      $this->category = 'Médio';
    }
    elseif ($weight <= 120.2) {
      $this->category = 'Pesado';
    } else {
      $this->category = 'Inválido';
    }
  }

  public function getWins () : int {
    return $this->wins;
  }

  public function setWins (int $wins) : void {
    $this->wins = $wins;
  }

  public function getDraw () : int {
    return $this->draw;
  }

  public function setDraw (int $draw) : void {
    $this->draw = $draw;
  }

  public function getLose () : int {
    return $this->lose;
  }

  public function setLose ($lose) : void {
    $this->lose = $lose;
  }

  public function presentation () {
    echo "Nome: {$this->getName()} <br>";
    echo "Idade {$this->getAge()} <br>";
    echo "Nacionalidade: {$this->getNacionality()} <br>";
    echo "Peso: {$this->getWeight()} <br>";
    echo "Altura: {$this->getHeight()} <br>";
    echo "Categoria: {$this->getCategory()} <br>";
    echo "Vitórias: {$this->getWins()} <br>";
    echo "Empates: {$this->getdraw()} <br>";
    echo "Derrotas: {$this->getlose()} <br><br>";
  }

  public function status () {
    echo "Nome: {$this->getName()} <br>";
    echo "Categoria: {$this->getCategory()} <br>";
    echo "Wins: {$this->getWins()} <br>";
    echo "Empates: {$this->getdraw()} <br>";
    echo "Derrotas: {$this->getlose()} <br>";
  }

  public function winFight () {
    $this->setWins($this->getWins() + 1);
  }
  public function drawFight () {
    $this->setdraw($this->getdraw() + 1);
  }
  public function loseFight () {
    $this->setlose($this->getlose() + 1);
  }
}