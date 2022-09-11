
<?php
$servername = "localhost";
$username = "csctest";
$password = "0000";
$dbname = "osama";

// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>