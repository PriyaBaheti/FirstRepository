<?php

$servername="localhost:3308";
$unm="root";
$pass="";
$db="mydb";
$conn=new mysqli($servername, $unm, $pass, $db);
    if($conn->connect_error)
    {
        die("error in db connection". $conn->connect_error);
    }
    else
    {
        echo "db connected successfully....";
    }
    ?>