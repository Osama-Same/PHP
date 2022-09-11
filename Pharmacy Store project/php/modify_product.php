<?php
include("connect.php");

$product_id = $_POST["PRODUCT_ID"];
$name = $_POST["NAME"];
$price = $_POST["PRICE"];
$description = $_POST["DESCRIPTION"];

$query = "UPDATE `products` SET `NAME`='$name', `PRICE`='$price',`DESCRIPTION`='$description'
		WHERE `ID`=$product_id ";
$link->query($query);
		
if(!file_exists($_FILES['FILE']['tmp_name']) || !is_uploaded_file($_FILES['FILE']['tmp_name'])) {
		header("Location:../modify_product.php");
}else{
$extintion = pathinfo(basename($_FILES['FILE']['name']), PATHINFO_EXTENSION);

$tmp_path = $_FILES['FILE']['tmp_name'];

$file_name = "images/products/".time().".".$extintion ;

move_uploaded_file($tmp_path,"../".$file_name);

$query = "UPDATE `products` SET `IMAGE`='$file_name'
		WHERE `ID`=$product_id ";
mysqli_query($link,$query);
}

header("Location:../modify_product.php");


?>