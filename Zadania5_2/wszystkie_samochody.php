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
    <?php
    $query = 'SELECT id, marka, model, cena from samochody 
         ORDER BY rok';
    if (!$result = mysqli_query($link, $query)) {
        echo "Błąd" . '<br>';
        '</body>';
        '</html>';
    }
    ?>

    <table align="center">
        <tr>
            <td>Id</td>
            <td>Marka</td>
            <td>Model</td>
            <td>Cena</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_row($result)) {
            echo '<tr>';
            echo '<td><a href="szczegoly.php?id=' . $row[0] . '">' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>

</body>
</html>