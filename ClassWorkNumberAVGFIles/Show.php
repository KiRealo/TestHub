<?php

class Show
{

    public function echoRandom($randomNum)
    {
        return 'Random integer: ' . $randomNum . PHP_EOL;
    }

    public function showAVG($numbers)
    {
        $avg = number_format(array_sum($numbers) / count($numbers), 2);
        return 'AVG: ' . $avg . PHP_EOL;
    }
}