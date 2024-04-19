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
    $child_bed = $_POST['child_bed'];
    if (isset($addition)) {
        $additions = $_POST['addition'];
    } else {
        $additions = [];
    }
?>

<h2>Hotel reservation</h2>
<h3>Booking summary</h3>
    <hr>
    Success! the booking process was successful. Here are details: <br>
    <ul>
        <li>Reservation has been made for: <?php echo $name, " ", $surname?></li>
        <li>We'll prepare a room for <?php echo $num_of_people;
            if ($num_of_people == 1) {
                echo " person";
            } else {
                echo " people";
            } ?>
        </li>
        <li>Dates of your stay: <?php echo $date_begin, " - ", $date_end ?></li>
        <li>Your e-mail (Notice! Make sure if it's correct): <?php echo $mail ?></li>
        <li> Your card number (Notice! Make sure if it's correct): <?php echo $card ?></li>
        <?php if($child_bed === "yes"): ?>
            <li>We will also prepare a children's bed</li>
            <?php endif; ?>
        <?php if (count($additions)>0): ?>
            <li>We will also prepare additional amenities:</li>
            <ul>
                <?php
                foreach ($additions as $addition):
                    if ($addition === "air_conditioning") $addition = "Air Conditioning";
                    if ($addition === "ash_trey") $addition = "Ash trey";
                    if ($addition === "bottle_of_wine") $addition = "Bottle of wine";
                    echo "<li>" . $addition . "</li>";
                endforeach;
                ?>
            </ul>
        <?php endif; ?>
    </ul>

</body>
</html>