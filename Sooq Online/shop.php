<?php
session_start();
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
    <link rel="stylesheet" href="../frontEnd/css/home.css">
</head>

<body>

    <div class="header-blue">
        <?php include("./navbar.php") ?>
            <?php    
            $src = "../server/imgShop/";
            if (isset($_POST['btu-search'])) {
                $search_value = $_POST['search'];
                $sql = "select * from shop where name_shop LIKE '%$search_value%' or price_shop LIKE '%$search_value%'";
            } else {
                $sql = "select * from shop";
                $search_value = "";
            }
            $res = $conn->query($sql);
            ?>
            <div class="text-box">
                <h1>Sooq Online</h1>
                <p>A One Stop Place For All Your Tech Needs!</p>
                <form class="search" action="shop.php" method="POST">
                    <input type="search" placeholder="Search here..." name="search" value="<?php echo $search_value; ?>">
                    <button type="submit" name="btu-search">Search</button>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_array($res)) { ?>

                    <div class="col-md-4">
                        <figure class="card card-product-grid card-lg">
                            <a href="./profile.php" style="color: black; text-decoration: none; padding-top: 11px; padding-left: 11px;">
                                <img src="./img/user/<?php echo $row["img"] ?>" alt="" style="width: 35px; border-radius: 50%; height:35px; margin-top: -8px;" class="d-inline-block align-text-top" />
                                <?php echo $row["name"] ?></a>
                            <div class='label-top shadow-sm'><?php echo $row['category'] ?></div>
                            <a href="#" class="img-wrap" data-abc="true"><img src="./img/shop/<?php echo $row["img_shop"] ?>"></a>
                            <figcaption class="info-wrap">
                                <div class="row">

                                    <div class='clearfix mb-3'>
                                        <span class='float-start badge rounded-pill bg-primary'><?php echo $row["name_shop"] ?></span>
                                    </div>
                                    <div class="col-md-8"> <a href="#" class="title" data-abc="true"><?php echo $row['city_shop'] ?></a> </div>
                                    <div class="col-md-8"> <a href="#" class="title" data-abc="true"><?php echo $row['description'] ?></a> </div>
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
                            <div class="bottom-wrap"> <a href="./view_shop.php?id_shop=<?php echo $row["id_shop"]?>"  class="btn btn-primary float-right" data-abc="true"> View Prodect </a>
                                <div class="price-wrap"> 
                                    <span class="price h5">$<?php echo $row["price_shop"] ?></span> <br>
                                    </div>
                            </div>
                        </figure>
                    </div>


                <?php } ?>
            </div>
        </div>
        <?php include("./footer.php") ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>