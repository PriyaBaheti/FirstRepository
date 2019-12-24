<?php
$serverename="localhost:3308";
$uname="root";
$pass="";
$dbnm="mydb";

$sql="select * from demopriya;";

$update="update demopriya set uname='Gudduu' where pass=153;";

$conn=new mysqli($serverename, $uname, $pass,$dbnm);

if($conn->connect_error)
{
    die("conn failed ".$conn->connect_error);
}
else
{
    //echo "success";
}

$result=$conn->query($sql);

$res=$conn->query($update);
?>