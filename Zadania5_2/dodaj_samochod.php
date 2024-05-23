<?php
require_once "config.php";
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
    <!-- Treść bloga będzie tutaj -->
    <form action="dodaj_do_bazy.php" method="POST" align="center">
        Marka: <input type="text" name="marka"><br>
        Model: <input type="text" name="model"><br>
        Cena: <input type="number" name="cena"><br>
        Rok: <input type="number" name="rok"><br>
        Opis: <input type="text" name="opis"><br>
        <input type="submit">
    </form>
</div>

</body>
</html>