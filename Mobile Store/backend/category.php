<?php
session_start();
include("./database/connect.php");
if (isset($_GET['s'])) {

    function valid($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $nameCategory = valid($_GET['nameCategory']);
    $data = 'nameCategory= ' . $nameCategory ;

    $sql = "select * from category WHERE nameCategory='$nameCategory'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($count == 1) {
        if ($row['nameCategory']  == 'Mobile') {
         
            header("Location: ../frontEnd/category/Moblie.php");
        }else
        if ($row['nameCategory']  == 'Computer') {
         
            header("Location: ../frontEnd/category/Computer.php");
        }
    }
}
?>