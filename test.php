<?php 

$user = 'root';
$password = 'Berber97';
$db = 'gSquared';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);



//Create connection
mysql_connect($host,$user,$password);
mysql_select_db($db) or die( "Unable to select database");




if (true == true){
	$sql = "INSERT INTO Requested (name, location, days)
	VALUES ('','abc', 'def', 'a');";
}
else 
	$sql = "INSERT INTO Given(name, location, days)
	VALUES ('','a', 'b', 'c');";



$conn = new mysqli($host, $user, $password, $dbn);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Requested (name, location, days)
   VALUES ('','abc', 'def', 'a');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




$con=mysql_connect("localhost", $user, $password)
or die ('Couldnt connect to server');
mysql_select_db($db,$con)
or die('could not connect to db');
?>
?>
