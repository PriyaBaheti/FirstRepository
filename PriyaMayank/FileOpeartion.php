<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
 $myfile=fopen("Myfile.txt", "w");
 $txt="First Line in File...\n";
 fwrite($myfile, $txt);
 $txt="second Line in File....\n";
 fwrite($myfile, $txt);
 fclose($myfile);

?>
   
</body>
</html>