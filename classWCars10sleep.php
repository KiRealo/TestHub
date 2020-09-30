<?php
declare(strict_types=1);

class car
{
    public $mark;
    public $tilp;
    public $pincode;
    public $number;
    public function __construct(string $mark, float $tilp, $number, int $pincode)
    {
        $this->mark = $mark;
        $this->tilp = $tilp;
        $this->number = $number;
        $this->pincode = $pincode;
    }

}

$cars = [new car('BMW', 200, 'KK-1818', 111),
    new car('Audi', 300, 'TT-4848', 222),
    new car('VW', 200, 'VV-4747', 333)];

$i = 0;
foreach ($cars as $car) {
    echo $car->mark . " " . $car->tilp . " " . $car->number . "NR chose: " . $i . PHP_EOL;
    $i++;
}
$choise = readline("chose car by 0,1,2..:");
$chosen = $cars[$choise];
$putPinCode = readline('Put PinCode: ');

if ($putPinCode == $chosen->pincode) {

    $odometr = 0;

    $per100km = 10;
    $per10km = $per100km / 100;
    $tilpums = $chosen->tilp;
    while ($tilpums >= 0) {
        $tilpums = $tilpums - $per10km;
        $odometr = $odometr + 10;
        echo 'tilpums: ' . $tilpums . "NR: " . $chosen->number . ' marka: ' . $chosen->mark . ' Odometrs: ' . $odometr . PHP_EOL;
        sleep(1);
    }
}
