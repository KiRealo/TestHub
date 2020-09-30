<?php
declare(strict_types=1);

require_once 'SaveLoad.php';
require_once 'Random.php';
require_once 'Show.php';

$random = new Random();
$randomNum = $random->__construct();

$saveLoad = new SaveLoad();
$numbers = $saveLoad->load();
$numbers[] = $randomNum;

$saveLoad->save($numbers);
$show = new Show();
echo $show->echoRandom($randomNum);
echo $show->showAVG($numbers);
