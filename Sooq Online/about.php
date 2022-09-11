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
      <?php include("./navbar.php")?>

        <div class="text-box">
            <h1>About US</h1>
            <p>WE HAVE OVER 20 YEARS OF EXPERIENCE</p>
        </div>

    </div>


    <section class="about">
        <h1>ABOUT THE MOBILE STORE ONLINE</h1>
        <p>Mobile phone has almost become an internal part of the human life. Every walk of life is spent with a mobile phone. Technology is also at its paciest best. A new gadget launches almost every fortnight</p>

        <div class="row_about">
            <div class="col_about">
                <h1>Who Are We?</h1>
                <p>The Mobile Store is is the leading distributor and retailer of mobile devices in the Middle East, representing some of leading brands in the world since its inception in 2006.</p>
                <p>The Mobile Store was established with a singular objective: to offer cutting edge mobile technologies to all consumer segments, making sure that we fulfill the often-ignored promise of an unparalleled customer experience. Today, we serve a growing customer base through more than 3,200 points of sale, 13 showrooms and 15 service centers across Palestine, Jordan and Iraq. We also launched an online store that was conceived to elevate the online shopping experience in the region by offering choice, ease-of-use, and security.</p>
            </div>
            <div class="col_about">
                <img src="https://fdn.gsmarena.com/imgroot/news/18/11/t-mobile-offering-free-4k-tv-when-buy-new-samsung-phone/-728w2/gsmarena_000.jpg" />
            </div>
        </div>
    </section>
    <?php include("./footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>