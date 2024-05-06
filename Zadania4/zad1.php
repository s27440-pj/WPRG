<?php
$file = './plik.txt';

$fileContent = fopen($file, 'r+');
if ($fileContent === false) {
    echo "Nie można otworzyć pliku.";
} else {
    $lines = [];
    while(!feof($fileContent)){
        $line = fgets($fileContent);
        if ($line !== false) {
            $lines[] = $line;
        }
    }

    $last_line = end($lines);
    $last_char = substr($last_line, -1);
    if ($last_char !== "\n") {
        array_pop($lines);
        $last_line .= "\n";
        $lines[] = $last_line;
    }

    $reversed_lines = array_reverse($lines);

    // Zapisz odwróconą zawartość do pliku
    if (file_put_contents($file, implode("", $reversed_lines)) !== false) {
        echo "Plik został przetworzony pomyślnie.";
    } else {
        echo "Wystąpił błąd podczas zapisu do pliku.";
    }
    fclose($fileContent);
}
?>
