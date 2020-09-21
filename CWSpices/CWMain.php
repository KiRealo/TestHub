<?php
declare(strict_types=1);

require __DIR__ . '/Spices/Spice.php';
require __DIR__ . '/Spices/SpiceCollection.php';
require __DIR__ . '/Spices/Spice/Salt.php';
require __DIR__ . '/Spices/Spice/Vegeta.php';
foreach (glob('Spices/Spice/*')as $filename){
    require_once $filename;
}



use Spices\Spice;
use Spices\SpiceCollection;
use Spices\Spice\{Salt,Vegeta};


$spices=new SpiceCollection();
$spices->add(new Salt());
$spices->add(new Vegeta());

foreach ($spices->all() as $spic){
    /** @var Spice $spic */
    echo $spic->getName() . ' ' . $spic->getColor() . PHP_EOL;
}
