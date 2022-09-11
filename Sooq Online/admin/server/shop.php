<?php

include('../../database/connect.php');

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
    move_uploaded_file($tmp_name, "./imgShop/" . $img_shop);
    $sql = "INSERT INTO shop(id_user, name ,img ,name_shop , category,img_shop,description,city_shop,price_shop,date) 
    VALUES('$id_user', '$name','$img' ,'$name_shop' ,' $category','$img' , '$description' , '$city_shop' , '$price_shop' ,'$date' )";
    if ($conn->query($sql)) {
        $id = $conn->insert_id;
        echo "
            <tr uid='{$id}'>
              <td>{$id_user}</td>
              <td>{$name}</td>
              <td><img src='./uploadsUser/'$img' style='width: 90px; height: 60px;' /></td>
              <td>{$name_shop}</td>
              <td>{$category}</td>
              <td>{$description}</td>
              <td><img src='./imgShop/'$img_shop' style='width: 90px; height: 60px;' /></td>
              <td>{$city_shop}</td>
              <td>{$price_shop}</td>
              <td>{$date}</td><td><img src='./imgShop/'$img_shop' style='width: 90px; height: 60px;' /></td><td><img src='./imgShop/'$img_shop' style='width: 90px; height: 60px;' /></td><td><img src='./imgShop/'$img_shop' style='width: 90px; height: 60px;' /></td>
              <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
              <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
            </tr>";
    } else {
        echo false;
    }
} else if ($action == "Update") {
    $id_shop = mysqli_real_escape_string($conn, $_POST["id_shop"]);
    $name_shop = mysqli_real_escape_string($conn, $_POST["name_shop"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price_shop = mysqli_real_escape_string($conn, $_POST["price_shop"]);
    $img_shop = $_FILES['img_shop']["name"];
    $tmp_name = $_FILES['img_shop']['tmp_name'];
    move_uploaded_file($tmp_name, "./imgShop/" . $img_shop);
    $sql = "update shop SET name_shop='{$name_shop}',category='{$category}',img_shop='{$img_shop}',description='{$description}',price_shop='{$price_shop}' where id_shop  ='{$id_shop}'";
    if ($conn->query($sql)) {
        echo "
            <td>{$id_shop}</td>
            <td>{$name_shop}</td>
            <td>{$category}</td>
            <td><img src='./imgShop/'$img_shop' style='width: 90px; height: 60px;' /></td>
            <td>{$description}</td>
            <td>{$price_shop}</td>
            <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
            <td><a href='#' class='btn btn-danger delete'>Delete</a></td>";
    } else {
        echo false;
    }
}
