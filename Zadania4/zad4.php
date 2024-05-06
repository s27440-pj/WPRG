<?php
    $filepath = "./plik4.txt";
    $file = file($filepath, FILE_IGNORE_NEW_LINES);
    if ($file !== FALSE) {
        $user_ip = $_SERVER['REMOTE_ADDR'];
        if (in_array($user_ip, $file)) {
            // Użytkownik jest z dozwolonego IP
            include 'zad4_1.html';
        } else {
            // Użytkownik jest z nieautoryzowanego IP
            include 'zad4_2.html';
        }
    }
?>