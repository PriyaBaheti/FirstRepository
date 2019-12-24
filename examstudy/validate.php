<?php
$servername="localhost:3308";
$uname="root";
$pass="";
$db="mysql";

$conn=new mysqli($servername,$uname,$pass,$db);
if($conn->connect_error)
die("connection not....");

else 
echo "Success......";


$id=$_POST['id'];
$name=$_POST['name'];
$sql="insert into mydb values($id,'$name');";

if($conn->query($sql)===true)
{
    echo "insert.....";
}
else
echo "fail.....";
?>