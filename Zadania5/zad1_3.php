<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
<body>

<h2>Hotel reservation</h2>
<h3>Booking summary</h3>
<hr>
Success! the booking process was successful. Here are details: <br>
<ul>
    <li>Reservation has been made for: <?php echo $_SESSION['name'], " ", $_SESSION['surname']?></li>
    <li>We'll prepare a room for <?php echo $_SESSION['num_of_people'];
        if ($_SESSION['num_of_people'] == 1) {
            echo " person";
        } else {
            echo " people";
        } ?>
    </li>
    <?php if ((int)$_SESSION['num_of_people']>1):?>
    <li>Staying in the hotel with you: <?php echo $_SESSION['name1'], " ", $_SESSION['surname1']?>
        <?php endif; ?>
        <?php if ((int)$_SESSION['num_of_people']>2):
            echo ", ", $_SESSION['name2'], " ", $_SESSION['surname2'];
        endif;
        if ((int)$_SESSION['num_of_people']>3):
            echo ", ", $_SESSION['name3'], " ", $_SESSION['surname3'];
        endif;?>
    </li>
    <li>Dates of your stay: <?php echo $_SESSION['date_begin'], " - ", $_SESSION['date_end'] ?></li>
    <li>Your e-mail (Notice! Make sure if it's correct): <?php echo $_SESSION['mail'] ?></li>
    <li> Your card number (Notice! Make sure if it's correct): <?php echo $_SESSION['card'] ?></li>
</ul>

</body>
</html>