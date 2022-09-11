<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
    $nameErr = $emailErr = $passwordErr = "";
    $name  = $email = $password = "";
    // Has the form been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Get & store username
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <div class="login">
            <div class="login-title">
                <h3>Mobile Store Login Form</h3>
            </div>
            <div class="login-input">
                <div>
                    <p>Fill out the form below to login</p>
                </div>
                <label>
                    <i class="fa fa-envelope"></i> Email
                </label>
                <div>
                    <input type="email" placeholder="Enter is Email" name="email" />
                </div>
                <span class="error" style="color: red; padding-left: 25%;"><?php echo $emailErr; ?></span>
                <br>
                <label>
                    <i class="fa fa-key icon"></i> Password
                </label>
                <div>
                    <input type="password" placeholder="Enter is Password" name="password" />
                </div>
                <span class="error" style="color: red; padding-left: 25%;"><?php echo $passwordErr; ?></span>
                </br>
                <div>
                    <button name="login" type="submit">
                        Login
                    </button>
                    <?php
                    $email = "osama@gmail.com";
                    $password = "123";
                    $error = "wrony email /password combination !";
                    if (isset($_POST['login'])) {

                        $getUserName = $_POST["email"];
                        $getPassword = $_POST["password"];
                        if ($email === $getUserName && $password === $getPassword) {
                            $_SESSION['USER'] = $getUserName;
                            $_SESSION['PASSWORD'] = $getPassword;
                            $_SESSION['LOGIN'] = true;
                            echo "<script> location.replace('../PHP Form Validation.php') </script>";
                        } else {
                            echo "<br>";
                            echo "<span style='color: red; padding-left: 25%;'> $error </span>";
                        }
                    }

                    ?>
                </div>
                <div>
                    <p>
                        Already have an account ? Register
                        <a href="../PHP Register/PHP Form Register.php"> Here</a>
                    </p>
                </div>
            </div>
        </div>
    </form>


</body>

</html>