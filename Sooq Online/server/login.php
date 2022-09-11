<?php
session_start();
include('../databases/connect.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' ";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($count == 1) {
        if ($row['admin_user']  == 'user') {
            $id_user = $row["id_user"];
            $_SESSION["id_user"] = $row["id_user"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["phone"] = $row["phone"];
            $_SESSION['img'] = $row["img"];
            $_SESSION['country'] = $row["country"];
            header("Location: ../home.php?success=successfully login ");
        } else if ($row['admin_user'] == 'admin') {
            $_SESSION["id_user"] = $row["id_user"];
            $_SESSION["id_user"] = $row["id_user"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["phone"] = $row["phone"];
            $_SESSION['img'] = $row["img"];
            $_SESSION['country'] = $row["country"];
            header("Location: ./admin/admin.php ");
        }
    } else {
        header("Location: ../login.php?error=Email Invalid or Password");
    }
}
