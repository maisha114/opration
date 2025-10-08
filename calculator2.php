<?php
if(isset($_POST['calculate'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
   
    $result = "";


switch($operation){

    case "add":
    $result=$number1+$number2;
    break;

    case  "sub":
    $result=$number1-$number2;
    break;

    case "mul":
        $result=$number1-$number2;
        break;


        case "div":
            $result=$number1-$number2;
            break;
        }
            echo "<h2>Result: $result</h2>";
            echo '<br><a href="calculator2.html">Back to Calculator</a>';
    }
    else {
            
            header("Location: calculator.html");
            exit();
        }
        ?>