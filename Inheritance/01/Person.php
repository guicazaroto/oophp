<?php
class Person {
  private $name;
  private $age;
  private $gender;

  public function birthDay () {

  }

  public function setName (string $name) : Person {
    $this->name = $name;
    return $this;
  }
  public function getName() : string {
    return $this->name;
  }

  public function setAge (int $age) : Person {
    $this->age = $age;
    return $this;
  }
  public function getAge() : int {
    return $this->age;
  }

  public function setGender (string $gender) : Person {
    $this->gender = $gender;
    return $this;
  }
  public function getGender() : string {
    return $this->gender;
  }
}