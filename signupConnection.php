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

$sql="INSERT INTO customer VALUES(null,'$_POST[name]','$_POST[uname]','$_POST[password]','$_POST[phone]','$_POST[email]','$_POST[address]','$_POST[gender]')";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("location: userhome.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>