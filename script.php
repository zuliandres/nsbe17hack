<?php 

if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$object = $_POST['object'];
$location = $_POST['location'];
$time = $_POST['days'];
$requested = $_POST['request'];
if($object !=''&& $location !=''&& $time !=''&& $requested !='')
{
//  To redirect form on a particular page
header("Location:index.html");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}



$user = 'root';
$password = 'root';
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



if ($requested == true){
	$sql = "INSERT INTO Requested (name, location, days)
	VALUES ('',$object', '$location', '$days');";
}
else 
	$sql = "INSERT INTO Given(name, location, days)
	VALUES ('','$object', '$location', '$days');";

?>
