<?php
include("connect.php");
$product_id = $_GET["product_id"];
$query = "DELETE FROM `products` WHERE `ID`=$product_id";
$link->query($query);

header("Location: ../delete_product.php");
?>