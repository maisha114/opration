<?php

//  echo"here";


if (isset($_POST['Permission'])) {

   

    $age = $_POST['age'];
    $country = $_POST['country'];
    
    $result = "";

    $age1 ="18";
    $age2 ="12";
    $age3 ="16";
   
    $personality1 ="RWANDA";
    $personality2 ="BURUNDI";
    $personality3 ="DRC";
  

    if($age >= $age1 && $country== $personality1 ){
        $result= "ALLOW TO ENTER";
    }
  else if($age >= $age2 && $country== $personality2 ){
        $result= "ALLOW TO ENTER";
    }
  else if($age >= $age3 && $country== $personality3 ){
        $result= "ALLOW TO ENTER";
    }

else{
    $result = "NOT ALLOWED";
}
    

    echo "<h2>result: $result</h2>";
    echo '<br><a href="permission.html">Back to permission </a>';
}
 else {
    
    header("Location: permission.html");
    exit();
}
?>