<?php
declare(strict_types=1);

namespace Spices;

abstract class Spice{
    public abstract function getColor(): string;

    public function getName():string{
        return get_class($this);
    }
}

