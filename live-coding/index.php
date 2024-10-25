<?php

require 'class.php';
class Person
{
    public $gambe;
    public $mani;

    //Dependecy Injection
    public function __construct(ParteInferiore $gambe, ParteSuperiore $mani)
    {
        $this->gambe = $gambe->muoviLeGambe();
        $this->mani = $mani->muoviLeBraccia();
    }
}

//Object composition
$francesco = new Person(new Calcio(), new Saluta());
$antonio = new Person(new Camminare(), new SchioccaLeDita());
// $carlo = new Person();
