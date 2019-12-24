
<html>
    <head>
    <?php
$servername = "localhost";
$username = "root";
$password = "actscdac";
$dbname= "myphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
    </head>
    <body>
    <?php
        session_start();
        $name= $_GET["name"]; 
        $pass= $_GET["pass"];
        echo "<br>";
      
        $query="insert into  user values('$name','$pass')";
        
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        
        ?>
        <br>
        <a href="php_db.html">HOME</a>
    </body>
</html>