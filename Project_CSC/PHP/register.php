
<?php

if (isset($_POST['create'])) {
    include "../databases.php";
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
    $user_data = 'name' . $name . 'email' . $email . 'password' . $password .'phone'. $phone;

    if (empty($name)) {
        header("Location: ../register.php?error=Name is required&$user_data");
    } else if (empty($email)) {
        header("Location: ../register.php?error=Email is required&$user_data");
    } else if (empty($password)) {
        header("Location: ../register.php?error=Password is required&$user_data");
    } else if (empty($phone)) {
        header("Location: ../register.php?error=phone is required&$user_data");
    } else {
        $sql = "INSERT INTO users(name, email ,password ,phone) 
               VALUES('$name', '$email' ,'$password' ,' $phone')";
        $result = mysqli_query($conn, $sql);
        // print_r($result);die;
        if ($result) {
            header("Location: ../login.php?success=successfully created");
        } else {
            header("Location: ../register.php?error=unknown error occurred&$user_data");
        }
    }
}
