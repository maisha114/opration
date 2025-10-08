<?php
if (isset($_POST['Sign'])) {
    $fever = $_POST['fever'];
    $vomit = $_POST['vomit'];
    $weakness = $_POST['weakness'];
    $result = "";


$firstsign="fever";
$secondsign="vomit";
$thirdsign="weakness";



    if ($firstsign == $fever & $secondsign==$vomit & $thirdsign==$weakness) {
        $result = "sick";

    } elseif ($thirdsign == $weakness) {
        $result = "normal";
    } elseif ($secondsign == $vomit & $firstsign ==$fever) {
        $result = "sick";
   
        } else {
            $result = "Error: can not sick!";
        }
    

    echo "<h2>Result: $result</h2>";
    echo '<br><a href="Sign.html">Back to Sign</a>';
    }
else {
    
    header("Location: Sign.html");
    exit();
}
?>