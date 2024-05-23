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
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $query = "SELECT * from samochody
                WHERE id = $id";
        if (!$result = mysqli_query($link, $query)) {
            echo "Błąd" . '<br>';
            '</body>';
            '</html>';
        }
    }
    ?>

    <table align="center">
        <tr>
            <td>Id</td>
            <td>Marka</td>
            <td>Model</td>
            <td>Cena</td>
            <td>Rok</td>
            <td>Opis</td>
        </tr>
        <?php
            if ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['marka'] . '</td>';
                echo '<td>' . $row['model'] . '</td>';
                echo '<td>' . $row['cena'] . '</td>';
                echo '<td>' . $row['rok'] . '</td>';
                echo '<td>' . $row['opis'] . '</td>';
                echo '</tr>';
            }
        ?>

    </table>
</div>

</body>
</html>