
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



//$object = $_POST["object"];
//$location = $_POST["location"];
//$time = $_POST["days"];

//$requested = $_POST["request"];


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
mysql_connect(localhost:8889,$user,$password);
mysql_select_db($db) or die( "Unable to select database");

//$query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
//mysql_query($query);



//$NeederData = $conn->prepare("select location, itemNeeded from Needer");
//$GiverData = $conn->prepare("select location, itemGiving from Giver");

//if ($NeederData === $GiverData) {
	
	//no idea to do for when they match
//}


if ($requested == true){
	$sql = "INSERT INTO Requested (name, location, days)
	VALUES ('',$object', '$location', '$days');";
}
else 
	$sql = "INSERT INTO Given(name, location, days)
	VALUES ('','$object', '$location', '$days');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
