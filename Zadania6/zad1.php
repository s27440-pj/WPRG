<?php

//require_once "NoweAuto.php";
//require_once "AutoZDodatkami.php";
include "Ubezpieczenie.php";

use Zadania6\NoweAuto;
use Zadania6\AutoZDodatkami;
use Zadania6\Ubezpieczenie;

$first_car = new NoweAuto("Fiesta", 2000, 4.24);
echo $first_car->oblicz_cene() . "<br>";
$second_car = new AutoZDodatkami("Fiesta", 2000.0, 4.24, 30.0, 0.0, 10.0);
echo $second_car->oblicz_cene() . "<br>";
$third_car = new Ubezpieczenie("Fiesta", 2000.0, 4.24, 30.0, 0.0, 10.0,
                0.50, 10);
echo $third_car->oblicz_cene() . "<br>";
?>
