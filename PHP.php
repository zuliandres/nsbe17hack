
<?php 


$object = $_POST["object"];
$location = $_POST["location"];
$time = $_POST["time"];

$requested = $_POST["true"];


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
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
mysql_query($query);



//$NeederData = $conn->prepare("select location, itemNeeded from Needer");
//$GiverData = $conn->prepare("select location, itemGiving from Giver");

//if ($NeederData === $GiverData) {
	
	//no idea to do for when they match
//}


if $requested == true{
	$sql = "INSERT INTO Requested (name, location, time)
	VALUES (object, location, time);";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();
?>
