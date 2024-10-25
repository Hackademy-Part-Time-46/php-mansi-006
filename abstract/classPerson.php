<?php


abstract class Person
{
    use Life;
    public $firstname;
    public $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    abstract function saluta();
    // abstract function getCreditCard();
    // abstract function getName();
    public function ciao()
    {
        echo "Ciao sono una persona e mi chiamo $this->firstname $this->lastname \n";
    }
}

class Student extends Person
{

    public $avg;

    public function __construct($firstname, $lastname, $avg)
    {
        parent::__construct($firstname, $lastname);
        $this->avg = $avg;
    }
    public function saluta()
    {
        echo "Ciao sono uno studente e mi chiamo $this->firstname $this->lastname \n";
    }
}



class Teacher extends Person
{
    public function saluta()
    {
        echo "Ciao sono un docente e mi chiamo $this->firstname $this->lastname \n";
    }
}
