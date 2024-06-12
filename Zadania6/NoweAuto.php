<?php

namespace Zadania6;

class NoweAuto {
    public string $model;
    public float $euro_prize;
    public float $euro_course;
    function __construct($model, $euro_prize, $euro_course) {
        $this->model = $model;
        $this->euro_prize = $euro_prize;
        $this->euro_course = $euro_course;
    }

    public function oblicz_cene() {
        return $this->euro_prize * $this->euro_course;
    }
}

//$first_car = new NoweAuto("Fiesta", 20000, 4.24);
//echo $first_car->oblicz_cene();