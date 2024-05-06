<?php
    $file_path = './plik2.txt';
    if (file_exists($file_path)) {
        $visits = file_get_contents($file_path);
        $visits++;
    } else {
        $visits = 1;
    }
    file_put_contents($file_path, $visits);
?>
