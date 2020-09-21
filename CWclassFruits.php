<?php
declare(strict_types=1);

namespace ClassWorks;

abstract class Spice{
    public abstract function getColor(): string;

    public function getName():string{
        return get_class($this);
    }
}

class Vegeta extends Spice {
    public function getColor(): string
    {
        return "orange".PHP_EOL;
    }
    public function getName(): string
    {
        return parent::getName(); // TODO: Change the autogenerated stub
    }
}
class Salt extends Spice{
    public function getColor(): string
    {
        return "white";
    }
    public function getName(): string
    {
        return parent::getName(); // TODO: Change the autogenerated stub
    }
}
class spiceCollection{
    private $spices=[];
    public  function add(Spice $spices):void{
        $this->spices[]=$spices;
    }
    public  function  all():array
    {
        return $this->spices;
    }
}