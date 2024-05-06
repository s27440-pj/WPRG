<?php
    $file_path = './plik2.txt';
    if (file_exists($file_path)) {
        $visits = file_get_contents($file_path);
        if ($visits !== false) {
            $visits++;
        } else {
            echo "Nie można otworzyć pliku";
        }
    } else {
        $visits = 1;
    }
    if(file_put_contents($file_path, $visits) !== FALSE) {
        echo "Zapis do pliku udany. Liczba odwiedzin strony: " . $visits;
    } else {
        echo "Błąd zapisu, spróbuj ponownie";
    }
?>
