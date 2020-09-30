<?php

class car
{
    public function __construct(string $mark, int $tilp)
    {
        $this->mark = $mark;
        $this->tilp = $tilp;
    }

    public function getMark(): string
    {
        return $this->mark;
    }

    public function getTilp(): int
    {
        return $this->tilp;
    }
}

class quatro extends car
{
    public function qtro(): bool
    {
        return true;
    }
}

class tdi extends car
{
    public function tdiwka(): bool
    {
        return true;
    }
}

$cars = [
    new car('BMW', 200),
    new quatro('Audi', 300),
    new tdi('VW', 200)
];

foreach ($cars as $car){

    if ($car instanceof quatro) {
        echo 'Das is quatro!'.PHP_EOL;
    }elseif ($car instanceof tdi){
        echo 'Das is tdi'.PHP_EOL;
    }
    echo 'Marka: '. $car->getmark().'Tilpums: '.$car->getTilp().PHP_EOL;
}