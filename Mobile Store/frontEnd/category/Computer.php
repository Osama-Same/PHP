<?php
session_start();
include("../../backend/database/connect.php");

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
<?php
//include("../../backend/admin/server/");
    $src = "../../backend/admin/server/imgShop/";
    $sql = "select * from shop where category = 'Computer'";
    $res = $conn->query($sql);
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">

    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <div class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container">
                <a class="navbar-brand" href="../frontEnd/home.php">Mobile Store</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav" style="padding-left: 120px; margin-top: -8px;">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="../home.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="../about.php"><i class="fa fa-fw fa-address-card"></i> About</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="../contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="../shop.php"><i class="fa fa-shopping-cart"></i> Shop</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="../category.php"><i class="fa fa-list-alt"></i> Category</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">

                    </form>
                    <span class="navbar-text">
                        <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="../newpost.php"><i class="fa fa-fw fa-home"></i> New Post</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">
                                    <img src="../../backend/admin/server/uploadsUser/<?php echo $_SESSION["img"] ?>" alt="" style="width: 35px; border-radius: 50%; height:35px; margin-top: -8px;" class="d-inline-block align-text-top" />
                                    <?php echo $_SESSION["name"] ?></a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="./profile.php"><i class="fa fa-address-book"></i> Profile</a>
                                    <a class="dropdown-item" role="presentation" href="./editProfile.php"><i class="fa fa-edit"></i> Edit Profile</a>
                                    <a class="dropdown-item" role="button" href="../backend/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</a>
                                </div>
                            </li>
                    </span>
                </div>
            </div>
        </nav>

        <div class="text-box">
            <h1>Computer</h1>
            <p>WE HAVE OVER 20 YEARS OF EXPERIENCE</p>
        </div>

    </div>
    
    <div class="container">
        <div class="row" style="height: 100px;">
            <?php
            while ($row = mysqli_fetch_array($res)) { ?>

                <div class="col-md-4" >
                    <figure class="card card-product-grid card-lg">
                        <a href="./profile.php" style="color: black; text-decoration: none; padding-top: 11px; padding-left: 11px;">
                            <img src="../../backend/admin/server/uploadsUser/<?php echo $row["img"] ?>" alt="" style="width: 35px; border-radius: 50%; height:35px; margin-top: -8px;" class="d-inline-block align-text-top" />
                            <?php echo $row["name"] ?></a>
                        <div class='label-top shadow-sm'><?php echo $row['category'] ?></div>
                        <a href="#" class="img-wrap" data-abc="true"><img src="../../backend/admin/server/imgShop/<?php echo $row["img_shop"] ?>"></a>
                        <figcaption class="info-wrap">
                            <div class="row">

                                <div class='clearfix mb-3'>
                                    <span class='float-start badge rounded-pill bg-primary'><?php echo $row["name_shop"] ?></span>
                                </div>
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true"><?php echo $row['city_shop'] ?></a> </div>
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true"><?php echo $row['description'] ?></a> </div><br>
                                <div class="col-md-4">
                                    <div class="rating text-right">
                                        <span class='float-end price-hp'>
                                            <?php $date = date_create($row['date']);
                                            echo date_format($date, "Y/m/d"); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                        <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                            <div class="price-wrap"> <span class="price h5">$<?php echo $row["price_shop"] ?></span> <br> <small class="text-success">View Shop</small> </div>
                        </div>
                    </figure>
                </div>


            <?php } ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>