<?Php
session_start();

include("connect.php");

$id = $_POST["ID"];
$email = $_POST["EMAIL"];
$name = $_POST["NAME"];
$password = $_POST["PASSWORD"];
$phone = $_POST["PHONE"];
$gender = $_POST["GENDER"];
$country = $_POST["COUNTRY"];
$city = $_POST["CITY"];
$address = $_POST["ADDRESS"];
$zipcode = $_POST["ZIPCODE"];

$query = "UPDATE `user` SET
		`EMAIL`='$email', `PASSWORD`='$password', `NAME`='$name', `PHONE`='$phone', `GENDER`='$gender',
		`COUNTRY`='$country', `CITY`='$city', `ADDRESS`='$address', `ZIPCODE`='$zipcode' 
		WHERE `ID`=$id ";
$result = mysqli_query($link,$query);

header("Location: ../user.php");
?>