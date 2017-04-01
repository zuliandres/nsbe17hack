<?php 






$user = 'root';
$password = '26nsbe2017';
$db = 'gSquared';
$host = 'localhost';
$port = 8889;

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



?>
