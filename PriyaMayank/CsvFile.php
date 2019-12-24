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
    $myfile=fopen("MyCsv.csv","r");
    //print_r(fgetcsv($myfile));
   while(!feof($myfile))
    {
        $lineTxt=fgetcsv($myfile, 512);
        print $lineTxt[0].",".$lineTxt[1].",".$lineTxt[2].",".$lineTxt[3]."<br>";
    }
    fclose($myfile);
    ?>
</body>
</html>