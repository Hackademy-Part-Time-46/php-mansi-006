<?php
class Person
{
    protected $name;
    protected $surname;
    protected $age;
    protected $street;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name; //READ
    }

    public function setName($value)
    {
        //WRITE
        return $this->name = $value;
    }
    public function setSurname($value)
    {
        //WRITE
        return $this->surname = $value;
    }

    public function getAge()
    {
        return $this->age; //READ
    }

    public function setAge($value)
    {
        //WRITE
        return $this->age = $value;
    }
}
