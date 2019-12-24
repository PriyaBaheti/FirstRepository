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
        echo "$name";   
        echo "<br>";
      
        $query="select * from user where name='$name' and pass='$pass'";
        $result=$conn->query($query);
        echo "<br>";
        if($result->num_rows>0)
        {
            echo "data found<br>";
            while($data=$result->fetch_assoc()){
            echo "name: ".$data["name"]."<br>";
        }
        }
        else{
            echo "<h2>wrong pass</h2>";
        }
        $conn->close();
        $_SESSION["uname"]="$name";
        ?>
    </body>
    <a href="session.php">check session</a>
</html>