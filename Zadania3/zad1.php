<!DOCTYPE HTML>
<html>
<body>

<?php
    $birthday = $_GET['birthday'];
    $today_day = date('d');
    $today_month = date('m');
    $today_year = date('Y');
?>

<h2>Day of birth</h2>
<p>You were born at
    <?php echo date('l', strtotime($birthday)); ?>
</p>
<p>
    <?php
    $age = $today_year - date('Y', strtotime($birthday));
    // z tym ifem jest coś nie tak
    if ($today_month < date('m', strtotime($birthday))) {
        $age--;
    }
    if ($today_month == date('m', strtotime($birthday))) {
        if (date('z') < date('z', strtotime($birthday))) {
            $age--;
        }
    }
    echo "You are $age years old.";
    ?>
</p>
<p>
    <?php
        $days_to_birthday = date('z') - date('z', strtotime($birthday)) - 1;
        if ($days_to_birthday < 0) {
            $days_to_birthday = (int)$days_to_birthday + 365;
        }
        echo "There are $days_to_birthday until your next birthday.";
    ?>
</p>

</body>
</html>