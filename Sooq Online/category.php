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
    <link rel="stylesheet" href="./css/home.css">

</head>

<body>

    <div class="header-blue">
        <?php include("./navbar.php") ?>
        <div class="text-box">
            <h1>Category</h1>
            <p>WE HAVE OVER 20 YEARS OF EXPERIENCE</p>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <?php
            $sql = "select * from category";
            $result = mysqli_query($conn, $sql);
            ?>
            <?php
            while ($row = mysqli_fetch_array($result)) {  ?>
                <div class="col" style="margin-bottom:50px ;">
                  
                        <img src="./img/Category/<?php echo $row['imgCategory'] ?>" width="300" height="200"><br><br>
                        <h4 style="text-align: left;"><?php echo $row["nameCategory"] ?></h4>
            
                </div><br><br>
            <?php } ?>
        </div>
    </div>
    <?php include("./footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>