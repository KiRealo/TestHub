<?php
declare(strict_types=1);

include 'CWclassFruits.php';
use ClassWorks\Spice;
use ClassWorks\spiceCollection;
use ClassWorks\Vegeta;
use ClassWorks\Salt;

$spices=new spiceCollection();
$spices->add(new Salt());
$spices->add(new Vegeta());

foreach ($spices->all() as $spic){
    /** @var Spice $spic */
    echo $spic->getName() . ' ' . $spic->getColor() . PHP_EOL;
}
