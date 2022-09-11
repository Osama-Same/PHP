<?php
session_start();
include "../databases/connect.php";

$id_user = $_SESSION['id_user'];
$id_shop = $_POST['id_shop'];
//$like_shop = $_POST['like_shop'];
$sql = "SELECT * FROM `likee` WHERE id_shop='$id_shop' and id_user='$id_user'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($count == 1) {
  if ($row['like_shop'] == 0) {
    $sql1 =  "UPDATE `likee` SET `like_shop`='1' WHERE id_user='$id_user' and id_shop='$id_shop'";
    //mysqli_query($conn, $sql1);
    $conn->query($sql1);
    echo "like";
    
  } else if ($row['like_shop'] == 1) {
    $sql2 =  "UPDATE `likee` SET `like_shop`='0' WHERE id_user='$id_user' and id_shop='$id_shop'";
    //mysqli_query($conn, $sql2);
    $conn->query($sql2);
    echo "dislike";
  }
} else {
  $sql3 = "INSERT INTO `likee`(`id_user`, `id_shop`, `like_shop`) VALUES ('$id_user','$id_shop','1')";
  $conn->query($sql3);
  //  mysqli_query($conn, $sql3);
  echo 'insert';
}
