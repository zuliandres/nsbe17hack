
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$NeederData = $conn->prepare("select location, itemNeeded from Needer");
$GiverData = $conn->prepare("select location, itemGiving from Giver");

if ($NeederData === $GiverData) {
	
	//no idea to do for when they match
}
