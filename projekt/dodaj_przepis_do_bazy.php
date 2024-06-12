<?php
    require_once "config.php";
    date_default_timezone_set('Europe/Warsaw');
    $recepie_date = date('Y-m-d H:i:s');
    $name = $_POST["name"];
    $ingrediens = $_POST["ingrediens"];
    $recepie = $_POST["recepie"];
    $tips = $_POST["tips"];

    $query = "INSERT INTO przepis (recepie_date, name, ingrediens, recepie, tips)
    VALUES ('$recepie_date', '$name', '$ingrediens', '$recepie', '$tips')";

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

<div class="add">
    <?php
        if (!$result = mysqli_query($link, $query)) {
            echo "Error in adding new recepie to base.";
        } else {
            echo "Success! New recepie has been added to data base.";
        }
    ?>
</div>

</body>
</html>