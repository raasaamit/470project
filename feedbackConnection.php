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

$sql="INSERT INTO feedback VALUES(null,'$_POST[username]','$_POST[rating]','$_POST[message]')";
if ($conn->query($sql) === TRUE) {
    echo "Your Feedback has been recorded";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>