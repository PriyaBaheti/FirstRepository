<?php
include("DBConnection.php");


    $nm=$_POST['fname'];
    $dt=$_POST['dob']; 
    $sql="insert into mytable values (default, '$nm','$dt');";
    if($conn->query($sql))
    header("Location:indexForm.php");
  
    else
    header("refresh:10", "Location:indexForm.php");
    ?>

    
    