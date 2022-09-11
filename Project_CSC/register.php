<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <form action="PHP/register.php" method="POST">
        <div class="register">
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="register-title">
                <h3>Register Form</h3>
            </div>
            <div class="register-input">
                <div>
                    <p>Fill out the form below to Register</p>
                </div>
                <label>
                    <i class="fa fa-user icon"></i> Name
                </label>
                <div>
                    <input type="text" name="name" placeholder="Enter to Email" value='<?php if (isset($_GET['name']))
                                                                                            echo ($_GET['name']) ?>' />
                </div>
                <br>
                <label>
                    <i class="fa fa-envelope"></i> Email
                </label>
                <div>
                    <input type="email" name="email" value="
                <?php if (isset($_GET['email']))
                    echo ($_GET['email']); ?>" placeholder="Enter to Email" />
                </div>
                <br>
                <label>
                    <i class="fa fa-key icon"></i> Password
                </label>
                <div>
                    <input type="password" name="password" placeholder="Enter to Password" <?php
                                                                                            if (isset($_GET['password']))
                                                                                                echo ($_GET['password'])
                                                                                            ?> />
                </div>
                <br>
                <label htmlFor="phoneNumber">
                    <i class="fa fa-phone"></i> Phone
                </label>
                <div>
                    <input type="tel" name="phone" placeholder="Enter to Phone" value='<?php if (isset($_GET['phone']))
                                                                                            echo ($_GET['phone']) ?>' />
                </div>
                <br>
                <button type="submit" name="create">Create</button>
                <div>
                    <div>
                        <p>
                            Already have an account ? Login
                            <a href="./login.php"> Here</Link>
                        </p>
                    </div>
                </div>
    </form>

</body>

</html>