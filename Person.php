<?php

class Person
{
    public $name;
    private $age;
    protected $gender;
    public $isStudent;
    public $gemiddeldeCijfer;


    function __construct(string $name, int $age, string $gender) {

        $this->name = $name;

        $this->age = $age;

        $this->gender = $gender;

    }
}