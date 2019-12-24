<?php
include("DBConnection.php");

    $sql="select * from  mytable";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    echo "All Ok";
    else
    echo "error...";

    
    