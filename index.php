<?php

require_once('Animal.php');

$animal = new Animal(Animal::PERRO);

echo '<pre>';
var_dump(Animal::isMascota($animal));
print_r($animal);
echo '</pre>';

echo $animal->describe();