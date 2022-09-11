<?php
$servername = "sql210.epizy.com";
//$servername = "localhost";
//$username = "osama";
$username = "epiz_30325065";
//$password = "0000";
$password = "YpyB0HjrX0vHBPw";
//$dbname = "sooq online";
$dbname = "epiz_30325065_mobile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>