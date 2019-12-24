<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <?php

$servername="localhost:3308";
$unm="root";
$pass="";
$db="mydb";
    $sql="create table mytable (id int primary key auto_increment, name varchar(20), dob date);";

    $conn=new mysqli($servername, $unm, $pass, $db);
    if($conn->connect_error)
    {
        die("error in db connection". $conn->connect_error);
    }
    else
    {
        echo "db connected successfully....";
    }

    if($conn->query($sql)===TRUE)
    {
        echo "table created";
    }
    else{
        echo "table creation failed ".$conn->error;
    }

    $insertsql="insert into mytable values(default, 'Mayank', curdate())";

    if($conn->query($insertsql)===TRUE)
    {
        echo "data inserted....";
    }
    else
    {
        echo "data not inserted....";
    }
    ?>
</body>
</html>