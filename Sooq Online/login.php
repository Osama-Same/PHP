<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <div class="registration-form">
        <form method="POST" action="./server/login.php" enctype="multipart/form-data">
            <div class="form-icon">
                <span>Login</span>
            </div>
            <div class="form-text">
                <p>Fill out the form below to Login</p>
            </div>
            <div class="form-group">
                <input type="email" class="form-control item"  name="email" placeholder="Email..."  />
            </div>
            <div class="form-group">
                <input type="password" class="form-control item"  name="password" placeholder="Password..."  />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" name="login">Login</button>
            </div>
            <div class="form-group">
                <?php if (isset($_GET['error'])) { ?>
                    <p style="text-align: center; color: red;"><?php echo $_GET['error'];
                    } ?></p>
            </div>
            <div class="form-group">
                <p style="text-align: center; color: white;">
                    Already have an account ? Register
                    <a href="./register.php"> Here</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>