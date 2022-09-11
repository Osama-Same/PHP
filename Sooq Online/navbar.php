<?php

include("./databases/connect.php");

if (isset($_SESSION["admin_user"]) && isset($_SESSION["id_user"])) {
    if ($_SESSION["admin_user"] == 1) {
        $type = $_SESSION["admin_user"];
        $id = $_SESSION["id_user"];
    } else {
        $id = 0;
    }
} else {
    $id = 0;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sooq Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container">
            <a class="navbar-brand" href="./home.php">
                <h4 class="h4 text-white">Sooq Online</h4>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav" style="padding-left: 40px; margin-top: -5px;">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="./home.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="./about.php"><i class="fa fa-fw fa-address-card"></i> About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="./contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="./shop.php"><i class="fa fa-shopping-cart"></i> Shop</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="./category.php"><i class="fa fa-list-alt"></i> Category</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"></label></div>
                </form>

                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="./newpost.php"><i class="fa fa-plus-square"></i> New Post</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">
                            <img src="./img/user/<?php echo $_SESSION["img"] ?>" alt="" style="width: 35px; border-radius: 50%; height:35px; margin-top: -8px;" class="d-inline-block align-text-top" />
                            <?php echo $_SESSION["name"] ?></a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="./profile.php"><i class="fa fa-address-book"></i> Profile</a>
                            <a class="dropdown-item" role="presentation" href="./editProfile.php"><i class="fa fa-edit"></i> Edit Profile</a>
                            <a class="dropdown-item" role="button" href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>