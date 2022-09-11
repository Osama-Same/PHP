<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','csctest','0000','osama') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id_user"] = $row['id_user'];
        $_SESSION["email"] = $row['email'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <form method="POST" action="./PHP/login_server.php">
        <div class="register">
            <div class="register-title">
                <h3>Login Form</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="register-input">
                <div>
                    <p>Fill out the form below to Login</p>
                </div>

                <label>
                    <i class="fa fa-envelope"></i> Email
                </label>
                <div>
                    <input type="email" id="email" name="email" placeholder="Enter to Email" value="<?php if (isset($_GET['email']))
                                                                                                        echo ($_GET['email']); ?>" />

                </div>
                <br>
                <label htmlFor="password">
                    <i class="fa fa-key icon"></i> Password
                </label>
                <div>
                    <input type="password" id="password" name="password" placeholder="Enter to Password" value='<?php if (isset($_GET['password']))
                                                                                                                    echo ($_GET['password']); ?>' />
                </div>
                <br>

                <br>
                <button name="submit" type="submit">Login</button>
                <div>
                    <div>
                        <p>
                            Already have an account ? Register
                            <a href="./register.php"> Here</Link>
                        </p>
                    </div>
                </div>
    </form>

</body>

</html>