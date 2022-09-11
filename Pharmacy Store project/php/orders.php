<?Php
session_start();

include("connect.php");


	$user_id = $_GET["user_id"];
	$product_id = $_GET["product_id"];
	$query = "DELETE FROM `orders` WHERE `USER_ID`=$user_id AND`PRODUCT_ID`=$product_id";
	$link->query($query);

	header("Location: ../orders.php");


?>