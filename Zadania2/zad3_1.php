<!DOCTYPE HTML>
<html>
<body>

<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$num_of_people = $_POST['guests'];
$mail = $_POST['mail'];
$card = $_POST['card'];
$date_begin = $_POST['date_begin'];
$date_end = $_POST['date_end'];
$arrival_time = $_POST['arrival_time'];
$child_bed = $_POST['child_bed'];
if (isset($addition)) {
    $additions = $_POST['addition'];
} else {
    $additions = [];
}
?>

<?php if ((int)$num_of_people === 1): ?>
<!-- Now to pass data from previous form i need to create hidden fields in form -->
<form action="zad3_2.php" method="POST">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="surname" value="<?php echo $surname; ?>">
    <input type="hidden" name="num_of_people" value="<?php echo $num_of_people; ?>">
    <input type="hidden" name="mail" value="<?php echo $mail; ?>">
    <input type="hidden" name="card" value="<?php echo $card; ?>">
    <input type="hidden" name="date_begin" value="<?php echo $date_begin; ?>">
    <input type="hidden" name="date_end" value="<?php echo $date_end; ?>">
    <input type="hidden" name="arrival_time" value="<?php echo $arrival_time; ?>">
    <input type="hidden" name="child_bed" value="<?php echo $child_bed; ?>">
    <?php
        if (count($additions) > 0):
            foreach ($additions as $addition) {
                echo '<input type="hidden" name="additions[]" value="' . $addition . '">';
            }
                else: ?>
            <input type="hidden" name="additions[]">
    <?php endif; ?>
    <button type=submit>Please confirm one more time</button>
</form>
<?php else: ?>

<h2>Hotel reservation</h2>
<form action="zad3_2.php" method="POST">
    <p>Please enter names and surnames of other guests: </p>
    <label for="name1">Name: </label>
    <input type="text" id="name1" name="name1" required><br>
    <label for="surname1">Surname: </label>
    <input type="text" id="surname1" name="surname1" required><br>
    <?php
        if ($num_of_people === "3" || $num_of_people === "4"): ?>
            <label for="name2">Name: </label>
            <input type="text" id="name2" name="name2" required><br>
            <label for="surname2">Surname: </label>
            <input type="text" id="surname2" name="surname2" required><br>
    <?php endif;
        if ($num_of_people === "4"): ?>
            <label for="name3">Name: </label>
            <input type="text" id="name3" name="name3" required><br>
            <label for="surname3">Surname: </label>
            <input type="text" id="surname3" name="surname3" required><br>
        <?php endif; ?>
    <br>
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="surname" value="<?php echo $surname; ?>">
    <input type="hidden" name="num_of_people" value="<?php echo $num_of_people; ?>">
    <input type="hidden" name="mail" value="<?php echo $mail; ?>">
    <input type="hidden" name="card" value="<?php echo $card; ?>">
    <input type="hidden" name="date_begin" value="<?php echo $date_begin; ?>">
    <input type="hidden" name="date_end" value="<?php echo $date_end; ?>">
    <input type="hidden" name="arrival_time" value="<?php echo $arrival_time; ?>">
    <input type="hidden" name="child_bed" value="<?php echo $child_bed; ?>">
    <?php foreach ($additions as $addition) {
        echo '<input type="hidden" name="additions[]" value="' . $addition . '">';
    } ?>
    <button type=submit>Confirm</button>
</form>
<?php endif; ?>

</body>
</html>