<?php
if (isset($_POST['submit'])) {
    include "../databases.php";
    function valid($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $adminanduser = "user" || "admin";
    $email = valid($_POST['email']);
    $password = valid($_POST['password']);
    $user_data = 'name=' . $email . '&email=' . $password;


    if (empty($email)) {
        header("Location: ../login.php?email=Email is required&$user_data");
    } else if (empty($password)) {
        header("Location: ../login.php?password=Password is required&$user_data");
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
    }

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    // print_r($row );die;
    if ($count == 1) {
        if ($row["adminanduser"] == 'user') {
            $A = $_SESSION['id_user'] = $row['id_user'];
            print_r($_SESSION);
            header("Location: ../home.php?success=successfully login $A");
        } else
            if ($row["adminanduser"] == "admin") {
            header("Location: ../admin.php?success=successfully login");
        }
    } else {
        header("Location: ../login.php?error=Email Invalid or Password");
    }
}
