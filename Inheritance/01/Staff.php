<?php
class Staff extends Person {
  public $department;
  public $jobRole;

  public function getDepartment() : string {
    return $this->jobRole;
  }
  public function setDepartment (string $department) : Staff {
    $this->department = $department;
    return $this;
  }

  public function getRole() : string {
    return $this->jobRole;
  }
  public function setRole (string $role) : Staff{
    $this->jobRole = $role;
    return $this;
  }
}