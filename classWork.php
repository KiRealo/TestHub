<?php

declare(strict_types=1);

class Person
    {
    protected string $name;
    protected string  $surname;
    protected string  $middlename;
    public function __construct(string $name, string $surname, string $middlename)
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

$person=new Person('Vasjka','Pupkins','Petrovich');
$person2=new Person('Karlis','Zenofs','Peteris');
$person3=new Person('John','Doe','Michael');


echo $person->ekoName()." ".$person->middlname();
echo $person2->ekoName()." ".$person2->middlname();
echo $person3->ekoName()." ".$person3->middlname();