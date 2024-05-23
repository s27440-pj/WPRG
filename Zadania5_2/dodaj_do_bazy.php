<?php
    require_once "config.php";

    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $cena = $_POST["cena"];
    $rok = $_POST["rok"];
    $opis = $_POST["opis"];

    $query = "INSERT INTO samochody (marka, model, cena, rok, opis)
    VALUES ('$marka', '$model', '$cena', '$rok', '$opis')";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="header-content">
        <h1>Samochody</h1>
    </div>
</header>

<nav>
    <a href="index.html">Strona główna</a>
    <a href="wszystkie_samochody.php">Wszystkie samochody</a>
    <a href="dodaj_samochod.php">Dodaj samochód</a>
</nav>

<div class="content">
    <?php
        if (!$result = mysqli_query($link, $query)) {
            echo "Error in adding new car to base.";
        } else {
            echo "Success! New car has been added to data base.";
        }
    ?>
</div>

</body>
</html>