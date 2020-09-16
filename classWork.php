<?php

declare(strict_types=1);

class Person
    {
    protected string $name;
    protected string  $surname;
    protected string  $middlename;
    public function __construct(string $name, string $middlename=null, string $surname)
    {
    $this->name = $name;
    $this->surname=$surname;
    $this->middlename=$middlename;
    }
    public  function middlname():string
    {
        return $this->middlename.PHP_EOL;
    }
    public function  ekoName()
    {
    return $this->name.PHP_EOL.$this->middlename.PHP_EOL.$this->surname.PHP_EOL;
    }
}

$person=new Person('Vasjka','Petrovich','Pupkin');


echo $person->ekoName()." ".$person->middlname();