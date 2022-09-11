<?php

include('../databases/connect.php');

$action = $_POST["action"];
if ($action == "Insert") {

    $nameCategory = $_POST['nameCategory'];
    $imgCategory = $_FILES['imgCategory']["name"];
    $tmp_name = $_FILES['imgCategory']['tmp_name'];
    move_uploaded_file($tmp_name,"../img/Category/$imgCategory");
    $sql = "INSERT INTO category(nameCategory ,imgCategory) 
    VALUES( '$nameCategory','$imgCategory')";
    if ($conn->query($sql)) {
        $id = $conn->insert_id;
        echo "
            <tr uid='{$id}'>
              <td>{$category_id}</td>
              <td>{$nameCategory}</td>
              <td><img src='./categoryimg/'$imgCategory' style='width: 90px; height: 60px;' /></td>
              <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
              <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
            </tr>";
    } else {
        echo false;
    }
} else if ($action == "Update") {
    $category_id = mysqli_real_escape_string($conn, $_POST["category_id"]);
    $nameCategory = mysqli_real_escape_string($conn, $_POST["nameCategory"]);
    $imgCategory = $_FILES['imgCategory']["name"];
    $tmp_name = $_FILES['imgCategory']['tmp_name'];
    move_uploaded_file($tmp_name, "./categoryimg/" . $imgCategory);
    $sql = "update category SET nameCategory='{$nameCategory}',imgCategory='{$imgCategory}' where category_id  ='{$category_id}'";
    if ($conn->query($sql)) {
        echo "
            <td>{$category_id}</td>
            <td>{$nameCategory}</td>
            <td><img src='./categoryimg/'$imgCategory' style='width: 90px; height: 60px;' /></td>
            <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
            <td><a href='#' class='btn btn-danger delete'>Delete</a></td>";
    } else {
        echo false;
    }
}
