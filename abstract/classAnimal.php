<?php
abstract class Animal
{
    use Life;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Cougar extends Animal {}
