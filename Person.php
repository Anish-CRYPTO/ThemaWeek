<?php

class Person
{
    public $name;
    private $age;
    protected $gender;
    public $isStudent;
    public $gemiddeldeCijfer;


    public function getGegevens(): string
    {
        return ("name: ".$this->name ."<br>" . "leeftijd: ". $this->age. "<br>" . "geslacht: " . $this->gender . "<br><br>");
    }


    public function setAge(int $age)
    {
        $this->age = $age;
    }






    function __construct(string $name, int $age, string $gender, bool $isStudent, float $gemiddeldeCijfer) {

        $this->name = $name;

        $this->age = $age;

        $this->gender = $gender;

        $this->isStudent = $isStudent;

        $this->gemiddeldeCijfer = $gemiddeldeCijfer;

    }
}