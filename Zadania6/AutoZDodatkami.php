<?php

namespace Zadania6;
include "NoweAuto.php";
class AutoZDodatkami extends NoweAuto {
    public float $alarm;
    public float $radio;
    public float $klimatyzacja;
    function __construct($model, $euro_prize, $euro_course, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $euro_prize, $euro_course);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }
    public function oblicz_cene() {
        return ($this->euro_prize + $this->alarm + $this->radio + $this->klimatyzacja)
            * $this->euro_course;
    }

}