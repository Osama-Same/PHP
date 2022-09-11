<?php
session_start();
include("../backend/database/connect.php");
if (isset($_POST['create'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $phone = validate($_POST['phone']);
    $country = validate($_POST['country']);
    $img = validate($_FILES['img']['name']);
    $tmp_name = $_FILES['img']['tmp_name'];
  
    $user_data = 'name' . $name . 'email' . $email . 'password' . $password . 'phone' . $phone . 'img' . $img .'country'.$country;
    
    if (empty($name)) {
        header("Location: ../frontEnd/register.php?name=Name is required&$user_data");
    } else if (empty($email)) {
        header("Location: ../frontEnd/register.php?email=Email is required&$user_data");
    } else if (empty($password)) {
        header("Location: ../frontEnd/register.php?password=Password is required&$user_data");
    } else if (empty($phone)) {
        header("Location: ../frontEnd/register.php?phone=phone is required&$user_data");
    } else if (empty($img)) {
        header("Location: ../frontEnd/register.php?img=img is required&$user_data");
    }else if(empty($country)){
        header("Location: ../frontEnd/register.php?country=country is required&$user_data");
    } else {
        move_uploaded_file($tmp_name,"../uploadsUser/$img");
        $sql = "INSERT INTO users(name, email ,password ,phone , img ,admin_user ,country ) 
        VALUES('$name', '$email' ,'$password' ,' $phone', '$img' , 'user','$country')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../frontEnd/login.php?success=successfully created");
        } else {
            header("Location: ../frontEnd/register.php?error=unknown error occurred&$user_data");
        }
    }
   
}