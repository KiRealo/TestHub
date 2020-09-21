<?php
declare(strict_types=1);

namespace Spices;


class SpiceCollection{
    private $spices=[];
    public  function add(Spice $spices):void{
        $this->spices[]=$spices;
    }
    public  function  all():array
    {
        return $this->spices;
    }
}