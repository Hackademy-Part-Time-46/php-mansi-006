<?php

require 'class.php';
$person1 = new Person('Francesco', 'Mansi');
var_dump($person1);
// echo $person1->getName() . "\n";
$person1->setName('Francesco');
$person1->setSurname('Mansi');
$person1->setAge(19);
// echo $person1->getName() . "\n";

var_dump($person1);
