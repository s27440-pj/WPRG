<?php

namespace Zadania6;
include "AutoZDodatkami.php";

class Ubezpieczenie extends AutoZDodatkami {
    public float $wartosc_ubezpieczenia;
    public int $wiek_auta;
    function __construct($model, $euro_prize, $euro_course, $alarm, $radio, $klimatyzacja,
                         $wartosc_ubezpieczenia, $wiek_auta) {
        parent::__construct($model, $euro_prize, $euro_course, $alarm, $radio, $klimatyzacja);
        $this->wartosc_ubezpieczenia = $wartosc_ubezpieczenia;
        $this->wiek_auta = $wiek_auta;
    }
    public function oblicz_cene() {
        return $this->wartosc_ubezpieczenia * (parent::oblicz_cene() * ((100 - $this->wiek_auta)/100));
    }
}