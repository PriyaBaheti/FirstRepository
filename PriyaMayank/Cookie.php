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
    $cookie_name="user";
    $cookie_value="priya";
    setcookie($cookie_name, $cookie_value, time()+(86400), "/");
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "cookie named ".$cookie_name."is not set <br/>";
    }
    else
    {
        echo "cookie named ".$cookie_name."is set <br/>";
        echo "cookie value ".$_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>