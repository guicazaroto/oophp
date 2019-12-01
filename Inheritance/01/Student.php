<?php
class Student extends Person {
  private $enrollment;
  private $course;

  public function cancelEnrollment() {}

  public function getEnrollment() : int {
    return $this->enrollment;
  }
  public function setEnrollment(int $enr) : Student {
    $this->enrollment = $enr;
    return $this;
  }

  public function getCourse() : string {
    return $this->course;
  }
  public function setCourse(string $course) : Student {
    $this->course = $course;
    return $this;
  }

}