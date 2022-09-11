<?php
session_start();
include('../databases/connect.php');
if (isset($_POST['create'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $img = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name,"../img/user/$img");
        $sql = "INSERT INTO users(name, email ,password ,phone , img ,admin_user ,country ) 
        VALUES('$name', '$email' ,'$password' ,' $phone', '$img' , 'user','$country')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../login.php?success=successfully created");
        } else {
            header("Location: ../register.php?error=unknown error occurred");
            
        }
    }
   
