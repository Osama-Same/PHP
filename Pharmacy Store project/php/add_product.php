<?php
include("connect.php");

$name = $_POST["NAME"];
$price = $_POST["PRICE"];
$description = $_POST["DESCRIPTION"];


$extintion = pathinfo(basename($_FILES['FILE']['name']), PATHINFO_EXTENSION);

$tmp_path = $_FILES['FILE']['tmp_name'];

$file_name = "images/products/".time().".".$extintion ;

move_uploaded_file($tmp_path,"../".$file_name);

$query = "INSERT INTO `products` (`NAME`, `PRICE`,`DESCRIPTION`, `IMAGE`)
		VALUES 
		('$name','$price','$description', '$file_name')";
mysqli_query($link,$query);


header("Location:../add_product.php");


?>