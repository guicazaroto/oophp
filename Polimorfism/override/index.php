<?php
require './Animal.php';
require './Mamifero.php';
require './Reptil.php';

$m = new Mamifero();
echo $m->emitirSom();

echo '<br><br>';

$r = new Reptil();
echo $r->emitirSom();
