<?php
// works in edge, but not in google chrome - why?
    session_start();
    $visitLimit = 5;

    if(isset($_COOKIE['visit_count'])) {
        $visitCount = (int)$_COOKIE['visit_count'];
    } else {
        $visitCount = 0;
    }

    if(!isset($_SESSION['counted_visit'])) {
        $visitCount++;
        setcookie('visit_count', $visitCount, time() + (365 * 24 * 60 * 60));
        $_SESSION['counted_visit'] = true;
    }
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
</head>
<body>
<h1>Welcome to our website!</h1>
<?php if($visitCount >= $visitLimit): ?>
    <p>Thank you for visiting us <?= $visitCount ?> times!</p>
<?php else: ?>
    <p>This is your visit number <?= $visitCount ?>.</p>
<?php endif; ?>
</body>
</html>
