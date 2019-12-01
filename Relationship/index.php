<?php
require './Fighter.php';
require './Fight.php';

$f1 = new Fighter('Mike Tyson', 'USA', 32, 1.76, 95.5);
$f2 = new Fighter('Holyfield', 'USA', 36, 1.82, 94.2);
$f3 = new Fighter('Ivan Drago', 'URSS', 28, 1.90, 95.6);
$f4 = new Fighter('Rock Balboa', 'URSS', 28, 1.87, 94.6);


$fight_one = new Fight();
$fight_one->scheduleFight($f1, $f2);
$fight_one->battle();

$fight_two = new Fight();
$fight_two->scheduleFight($f4, $f3);
$fight_two->battle();

$fight_three = new Fight();
$fight_three->scheduleFight($f2, $f3);
$fight_three->battle();

$fight_four = new Fight();
$fight_four->scheduleFight($f1, $f3);
$fight_four->battle();


