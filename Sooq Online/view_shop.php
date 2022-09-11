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


<?php
if (isset($_POST["submit"])) {
    $item = [
        "id_shop" => $_POST["id_shop"],
        "id_user" => $_POST["id_user"],
        "name" => $_POST["name"],
        "img" => $_POST["img"],
        "name_shop" => $_POST["name_shop"],
        "category" => $_POST["category"],
        "img_shop" => $_POST["img_shop"],
        "description" => $_POST["description"],
        "city_shop" => $_POST["city_shop"],
        "price_shop" => $_POST["price_shop"],
        "date" => $_POST["date"],
    ];
}

$data = [];
$sql = "select * from shop where id_shop={$_GET["id_shop"]}";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    $data = $row = $res->fetch_assoc();
}
?>
<html>

<head>
    <title>Sooq Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="./css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="header-blue">
        <?php include("./navbar.php") ?>
        <div class="text-box">
            <h1>Sooq Online</h1>
            <p>A One Stop Place For All Your Tech Needs!</p>

        </div>
    </div>

    <div class='container mt-5'>
        <div class='row'>
            <div class='col-md-9 mx-auto'>
                <h2 class='text-muted mb-4'>Product Details</h2>
                <hr>
                <div class='row mt-1'>
                    <a href="./profile.php" style="color: black; text-decoration: none; padding-top: 11px; padding-left: 11px;">
                        <img src="./img/user/<?php echo $row["img"] ?>" alt="" style="width: 35px; border-radius: 50%; height:35px; margin-top: -8px;" class="d-inline-block align-text-top" />
                        <?php echo $row["name"] ?></a>
                    <div class='label-top shadow-sm'>
                        <a href="./shop.php" style="color: white;">Go To Back</a>
                    </div>
                </div>
                <div class='row mt-1'>
                    <div class='col-md-5'>
                        <img src="./img/shop/<?php echo $row["img_shop"] ?>" class='img-thumbnail' style="height: 345px;  width: 100%;">
                        <div class='label-top shadow-sm'><?php echo $row['category'] ?></div>
                    </div>
                    <div class='col-md-7'>
                        <dl class="row" style=" margin-right: -100px; margin-top: 30px; margin-left: 8px;">
                            <dt class="col-sm-3"><i class="fa fa-shopping-cart"></i> Name</dt>
                            <dd class="col-sm-9">
                                <p><?php echo $data["name_shop"]; ?></p>
                            </dd>
                            <dt class="col-sm-3"><i class="fa fa-flag"></i> Country</dt>
                            <dd class="col-sm-9">
                                <p><?php echo $data["city_shop"]; ?></p>
                            </dd>
                            <dt class="col-sm-3"><i class="fa fa-dollar"></i> Price</dt>
                            <dd class="col-sm-9">
                                <p class="font-weight-bold"> &#8377;<?php echo $data["price_shop"]; ?></p>
                            </dd>
                            <dt class="col-sm-3"><i class="fa fa-clock-o"></i> Time</dt>
                            <dd class="col-sm-9">
                                <p><?php $date = date_create($data['date']);
                                    echo date_format($date, "Y/m/d"); ?></p>
                            </dd>
                            <dt class="col-sm-3"><i class="fa fa-clock-o"></i> Description</dt>
                            <dd class="col-sm-9">
                                <p><?php echo $data["description"]; ?></p>
                            </dd>
                        </dl>

                        <div class="bg-white p-2">
                            <div class="d-flex flex-row fs-12">
                                <?php
                                $sqlCount = "SELECT * FROM comment  where id_shop={$row["id_shop"]}";
                                $resCount = mysqli_query($conn, $sqlCount);
                                ?>
                                <?php
                                $sql_like = "SELECT *
                                    FROM likee
                             WHERE id_shop={$row["id_shop"]} and like_shop='1'";
                                $res_like = $conn->query($sql_like);

                                ?>
                                <div class="like p-2 cursor">
                                    <button class='btn btn-primary' id="like">
                                        <i class="fa fa-thumbs-o-up"></i>
                                        Like <?php echo mysqli_num_rows($res_like) ?>
                                    </button>
                                </div>

                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1">
                                    <span class="ml-1">
                                        <button class='btn btn-primary' id="Comment">

                                            <i class="fa fa-commenting-o"></i> Comment <?php echo mysqli_num_rows($resCount) ?>
                                        </button>
                                    </span>
                                </div>
                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-2">
                                    <span class="ml-1"><button class='btn btn-primary'>
                                            Add Cart
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="input-group" style="margin: 16px; width: 100%;" id="divComment">
                        <input class="form-control" type="hidden" id="id_user" value="<?php echo $row['id_user'] ?>" placeholder="Write a comment...">
                        <input class="form-control" type="hidden" id="id_shop" placeholder="Write a comment..." value="<?php echo $row['id_shop'] ?>">
                        <input class="form-control" type="hidden" id="name" placeholder="Write a comment..." value="<?php echo $_SESSION['name'] ?>">
                        <input class="form-control" type="hidden" id="img" placeholder="Write a comment..." value="<?php echo $_SESSION['img'] ?>">
                        <input class="form-control" type="hidden" id="date_comment" placeholder="Write a comment..." value="<?php $date = date_create_from_format("j-M-Y", "15-Mar-2013");
                                                                                                                            echo date_format($date, "Y/m/d"); ?>">
                        <img src="./img/user/<?php echo $row["img"] ?>" alt="" style="width: 35px; border-radius: 50%; height:35px;margin-right: 10px;" class="d-inline-block align-text-top" /></a>
                        <input class="form-control" type="text" id="comment" placeholder="Write a comment...">
                        <button class='btn btn-primary' id="send"><i class="fa fa-paper-plane"></i></button>

                    </div>

                    <div class="container mt-5">
                        <div class="be-comment-block" id="i">
                            <?php
                            $sqll = "select * from comment where id_shop={$row["id_shop"]}";
                            $result = mysqli_query($conn, $sqll);
                            while ($roww = mysqli_fetch_array($result)) {  ?>
                                <div class="be-comment" uid="<?php echo $roww["id_shop"] ?>">
                                    <div class="be-comment-content">
                                        <span class="be-comment-name">
                                            <img src="./img/user/<?php echo $roww["img"] ?>" alt="" style="width: 35px; border-radius: 50%; height:35px;margin-right: 10px;" class="d-inline-block align-text-top" /></a>
                                            <a href="blog-detail-2.html"><?php echo $roww["name"] ?></a>
                                        </span>
                                        <span class="be-comment-time">
                                            <i class="fa fa-clock-o"></i>
                                            <?php echo $roww["date_comment"] ?>
                                        </span>

                                        <p class="be-comment-text">
                                            <?php echo $roww["comment"] ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var current_row = null;
            $("#divComment").hide();
            $("#Comment").click(function() {
                $("#divComment").show();
            });
            $("#send").click(function(event) {
                event.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "./server/comment.php",
                    data: {
                        id_user: $("#id_user").val(),
                        id_shop: $("#id_shop").val(),
                        name: $("#name").val(),
                        img: $("#img").val(),
                        comment: $("#comment").val(),
                        date_comment: $("#date_comment").val()
                    },

                    success: function(res) {
                        if (res) {
                            if ($("#t").val() == "0") {
                                $("#i").append(res);
                            } else {
                                $("#i").append(res);
                                $(current_row).html(res);
                            }
                        } else {
                            alert("Failed Try Again");
                        }

                    }

                })

            })
            $("#like").click(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "./server/like.php",
                    data: {
                        id_shop: $("#id_shop").val(),
                    },

                    success: function(res) {

                        console.log(res)
                        $("button").click(function() {
                            $("i").toggleClass("red");
                        });
                    }

                })

            })
        });
    </script>
    <?php include("./footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>