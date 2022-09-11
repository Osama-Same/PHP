<?php
include("../databases/connect.php");
$action = $_POST["action"];
if ($action == "Insert") {

    $id_user =$_POST['id_user'];
    $name =$_POST['name'];
    $img =$_POST['img'];
    $name_shop =$_POST['name_shop'];
    $category =$_POST['category'];
    $description =$_POST['description'];
    $city_shop = $_POST['city_shop'];
    $price_shop = $_POST['price_shop'];
    $date = $_POST['date'];
    $img_shop = $_FILES['img_shop']["name"];
    $tmp_name = $_FILES['img_shop']['tmp_name'];
    
    move_uploaded_file($tmp_name,"../img/shop/$img_shop");
    $sql = "INSERT INTO shop(id_user, name ,img ,name_shop , category,img_shop,description,city_shop,price_shop,date) 
    VALUES('$id_user', '$name','$img' ,'$name_shop' ,' $category','$img_shop' , '$description' , '$city_shop' , '$price_shop' ,'$date' )";

if ($conn->query($sql)) {
    $id = $conn->insert_id;
    echo "";
} else {
    echo false;
}
}