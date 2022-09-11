<?php
include("connect.php");
$name = $_POST["NAME"];
$email = $_POST["EMAIL"];
$subject = $_POST["SUBJECT"];

$message = $_POST["MESSAGE"];


$query = "INSERT INTO `message`( `NAME`,`EMAIL`, `SUBJECT`,`MESSAGE`)
 VALUES ('$name','$email','$subject','$message')";
mysqli_query($link,$query);
echo mysqli_error($link);
echo"<script>
			alert('Your MESSAGE Send ');
			location.href = '../contact.php';
			</script>";
?>