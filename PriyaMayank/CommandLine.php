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
    $sum=0;
        foreach($argv as $val)
        {
            $sum +=$val;
        }
        echo "Sum is ".$sum;
    ?>
</body>
</html>