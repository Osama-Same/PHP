<?php
include("connect.php");
session_start();

$email = $_POST["EMAIL"];


$query = "INSERT INTO `newsletter` ( `EMAIL`)
 VALUES ( '$email')";
mysqli_query($link,$query);
echo mysqli_error($link);

header("location:..");




?>