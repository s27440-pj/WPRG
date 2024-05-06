<!DOCTYPE HTML>
<html>
<body>

<?php
    $filepath = "./plik3.txt";
    $file = file($filepath);
    if ($file !== FALSE) {
        echo "<h2>Lista odnośników: </h2>";
        echo "<ul>";
        foreach ($file as $line) {
            $parts = explode(';', $line);
            if (count($parts) === 2) {
                $url = $parts[0];
                $description = $parts[1];
                echo "<li><a href='$url'>$description</a></li>";
            }
        }
    } else {
        echo "Nie udało sie otworzyć pliku";
    }


?>

</body>
</html>
