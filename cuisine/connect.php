
 <?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Indian";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "INSERT INTO `food`(`name`, `email`, `message`) VALUES ([value-1],[value-2],[value-3])";
	$result = $conn->commit($sql);
	
?>