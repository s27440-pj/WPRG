<?php
    session_start();
    $_SESSION['name1'] = $_POST['name1'];
    $_SESSION['surname1'] = $_POST['surname1'];
    if ($_SESSION['num_of_people'] > 2):
        $_SESSION['name2'] = $_POST['name2'];
        $_SESSION['surname2'] = $_POST['surname2'];
    endif;
    if ($_SESSION['num_of_people'] > 3):
        $_SESSION['name3'] = $_POST['name3'];
        $_SESSION['surname3'] = $_POST['surname3'];
    endif;
?>

<!DOCTYPE HTML>
<html>
<body>

<h2>Hotel reservation</h2>
Your data has been saved. Click button to summary od reservation. <br>
<button type="button" onclick="window.location.href='zad1_3.php'">See summary</button>

</body>
</html>