<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $action = $_POST['action'];
    switch ($action) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "You can't divide by zero";
            }
            break;
        default:
            $result = "Error";
            break;
    }
    
    echo "Result: $result";
}
?>
