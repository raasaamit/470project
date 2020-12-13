<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	//mysqli__select_db($conn, "restaurant");
	//echo "Connection successful"; 
}

?>