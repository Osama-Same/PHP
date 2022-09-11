<?Php
session_start();

include("connect.php");

$type = 1;
$email = $_POST["EMAIL"];
$name = $_POST["NAME"];
$password = $_POST["PASSWORD"];
$phone = $_POST["PHONE"];
$gender = $_POST["GENDER"];
$country = $_POST["COUNTRY"];
$city = $_POST["CITY"];
$address = $_POST["ADDRESS"];
$zipcode = $_POST["ZIPCODE"];

$query = "INSERT INTO `user` 
		(`EMAIL`, `PASSWORD`, `NAME`, `PHONE`, `GENDER`, `COUNTRY`, `CITY`, `ADDRESS`, `ZIPCODE`) 
		VALUES 
		('$email','$password','$name','$phone','$gender','$country','$city','$address','$zipcode')";
$result = mysqli_query($link,$query);

$query = "SELECT * FROM `user` WHERE `EMAIL` = '$email'  AND `PASSWORD` = '$password'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = mysqli_fetch_array($result);
			$_SESSION["TYPE"] = $type;
			$_SESSION["ID"] = $array["ID"];
			$_SESSION["NAME"] = $array["NAME"];
			
			header("Location: ../user.php");
		}
?>