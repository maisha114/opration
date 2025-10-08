<?php
if (isset($_POST['calculate'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = "";

    if ($operation == "add") {
        $result = $number1 + $number2;
    } elseif ($operation == "sub") {
        $result = $number1 - $number2;
    } elseif ($operation == "mul") {
        $result = $number1 * $number2;
    } elseif ($operation == "div") {
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            $result = "Error: Cannot divide by zero!";
        }
    }

    echo "<h2>Result: $result</h2>";
    echo '<br><a href="calculator.html">Back to Calculator</a>';
} else {
    
    header("Location: calculator.html");
    exit();
}
?>