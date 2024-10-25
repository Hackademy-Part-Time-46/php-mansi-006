<?php

require 'classPerson.php';
require 'classAnimal.php';

//$person = new Person('Tizio', 'caio');
$studente = new Student('Tizio', 'caio', 89);
$docente = new Teacher('Carlo', 'Rossi');
$pantera = new Cougar('Pippo');


$studente->eat();
$pantera->eat();


trait Life
{

    public function eat()
    {
        echo "mangio sono dentro al trait dentro la \n";
    }
}
