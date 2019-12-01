<?php
require './Person.php';
require './Staff.php';
require './Student.php';

$student = new Student();

$student->setName('João Emanuel')
  ->setAge(18)
  ->setGender('Male')
  ->setEnrollment(192020)
  ->setCourse('Math and Economy');

$staff = new Staff();
$staff->setName('Pedro Paulo')
  ->setAge(22)
  ->setGender('Female')
  ->setDepartment('Financial')
  ->setRole('Counter');




echo '<pre>';
print_r($student);

echo '<br>';
print_r($staff);