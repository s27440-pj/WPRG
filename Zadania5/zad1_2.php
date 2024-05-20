<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['num_of_people'] = $_POST['guests'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['card'] = $_POST['card'];
$_SESSION['date_begin'] = $_POST['date_begin'];
$_SESSION['date_end'] = $_POST['date_end'];
$_SESSION['arrival_time'] = $_POST['arrival_time'];

if ((int)$_SESSION['num_of_people'] === 1) {
    header("Location: zad1_3.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>
<body>

<h2>Hotel reservation</h2>

<form action="zad1_2_1.php" method="POST">
    <p>Please enter names and surnames of other guests: </p>
    <label for="name1">Name: </label>
    <input type="text" id="name1" name="name1" required><br>
    <label for="surname1">Surname: </label>
    <input type="text" id="surname1" name="surname1" required><br>
    <?php
    if ($_SESSION['num_of_people'] === "3" || $_SESSION['num_of_people'] === "4"): ?>
        <label for="name2">Name: </label>
        <input type="text" id="name2" name="name2" required><br>
        <label for="surname2">Surname: </label>
        <input type="text" id="surname2" name="surname2" required><br>
    <?php endif;
    if ($_SESSION['num_of_people'] === "4"): ?>
        <label for="name3">Name: </label>
        <input type="text" id="name3" name="name3" required><br>
        <label for="surname3">Surname: </label>
        <input type="text" id="surname3" name="surname3" required><br>
    <?php endif; ?>
    <br>
    <button type=submit>Save</button><br>
<!--    <button type="button" onclick="window.location.hfre='zad1_3.php'">See summary</button>-->
</form>
</body>
</html>
