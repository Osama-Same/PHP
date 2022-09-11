<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <form name="submit" method="POST" action="insert data.php">
        <div class="register">
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
                    <input type="text" placeholder="Enter to Name" name="name" required />
                </div>
                <br>
                <label>
                    <i class="fa fa-envelope"></i> Email
                </label>
                <div>
                    <input type="email" placeholder="Enter to Email" name="email" required />
                </div>
                <br>
                <label htmlFor="password">
                    <i class="fa fa-key icon"></i> Password
                </label>
                <div>
                    <input type="password" placeholder="Enter to Password" name="password" required />
                </div>
                <br>
                <label htmlFor="phoneNumber">
                    <i class="fa fa-phone"></i> Phone
                </label>
                <div>
                    <input type="tel" placeholder="Enter to Phone" name="phone" required />
                </div>
                <br>
                <label htmlFor="img">
                    <i class="fa fa-camera"></i> Img Url
                </label>
                <div>
                    <input type="url" placeholder="Enter To Img Url" name="img" required />
                </div>
                <br>
                <button name="register" type="submit">Register</button>
                <div>
                    <div>
                        <p>
                            Already have an account ? Login
                            <a href="../PHP Login/PHP Form Login.php"> Here</Link>
                        </p>
                    </div>

                </div>
    </form>
    
</body>

</html>