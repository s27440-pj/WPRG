<?php

if (!$file = fopen('./plik.txt', 'r')){
    echo "Cannot open plik.txt";
} else {
    $lines = [];
    while(!feof($file)){
        $line = fgets($file);
        if ($line !== false) {
            $lines[] = $line;
        }
    }
    fclose($file);

    $last_line = end($lines);
    if (strlen($last_line) > 0) {
        // Jeśli ostatnia linijka jest nie pusta, dodaj nową linię
        $last_line = $last_line . "\n";
        array_pop($lines);
        $lines[] = $last_line;
    }

    $reversed_lines = array_reverse($lines);
    foreach ($reversed_lines as $line) {
        $line = nl2br($line);
        echo($line);
    }
}
?>