<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
   $x=1;
   while($x<=5)
   {
       echo "Number is ".$x."<br/>";
       $x++;
   }
  
   

   $a=2;
   $z=1;
   echo "power function using *= opeartor  <br>";
   while($z<=5)
   {
        
        if($z==1)
        {
            echo "power of 2 ^ ".$z." is ".$a."<br/>";
        }
        else
        {
            $a*=2;
            echo "power of 2 ^ ".$z." is ".$a."<br/>";
        }
        $z++;
    }
    $s=1;
    echo "power function using pow() function  <br>";
    while($s<=5)
    {
        echo "power of 2 ^ ".$s." is ".pow(2, $s)."<br/>";
        $s++;
    }
   ?> 
</body>
</html>