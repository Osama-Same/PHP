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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobile Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/home.css">

</head>

<body>

    <div class="header-blue">
        <?php include("./navbar.php") ?>
        <div class="text-box">
            <h1>New Post</h1>
            <p>WE HAVE OVER 20 YEARS OF EXPERIENCE</p>
        </div>

    </div>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>

            <section>
                <form id='frm' method="POST" enctype="multipart/form-data">
                    <input type='hidden' name='action' id='action' value='Insert'>
                    <input type='hidden' name='id' id='id_u' value='0'>
                    <h2 class="text-center">
                        <strong>Create</strong> Post
                    </h2>
                    <div class="form-group">
                        <input class="form-control" type="hidden" id="id_user" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">

                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" id="name" name="name" value="<?php echo $_SESSION['name'] ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" id="img" name="img" value="<?php echo $_SESSION['img'] ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" id="name_shop" name="name_shop" placeholder="Name Prodect">
                        <small id="errorName" style="color: red;  padding-left: 5px;"></small>
                    </div>

                    <div class='form-group'>
                        <select class="form-control" id="category" name="category">
                            <option selected value="">Open this select category</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Computer">Computer</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Playstation">Playstation</option>
                            <option value="Television">Television</option>
                        </select>
                        <small id="errorCategory" style="color: red; padding-left: 10px;"></small>

                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" id="description" name="description" placeholder="Enter Description">
                        <small id="errorDescription" style="color: red; padding-left: 10px;"></small>
                    </div>
                    <div class='form-group'>
                        <select class="form-control" name="city_shop" id="city_shop">
                            <option selected value="">Open this select Country</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Iraq ">Iraq </option>
                            <option value="Syria">Syria </option>
                            <option value="Emirates">Emirates</option>
                            <option value="Qatar">Qatar</option>
                        </select>
                        <small id="errorcity" style="color: red;padding-left: 5px;"></small>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" id="price_shop" name="price_shop" placeholder="Enter Price">
                        <small id="errorPrice" style="color: red;padding-left: 5px;"></small>

                    </div>
                    <div class="form-group">
                        <input class="form-control" type="date" id="date" name="date">
                        <small id="errorDate" style="color: red;padding-left: 5px;"></small>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="file" id="img_shop" name="img_shop">
                        <small id="errorImg" style="color: red;padding-left: 5px;"></small>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" value="Submit">
                    </div>
                    <div class="form-group">
                        <p id="Successfully" style="color: green;padding-left: 100px;"></p>
                    </div>
                </form>
            </section>
        </div>

    </div>
    </div>

    <script>
        $(document).ready(function() {

            $("#frm").submit(function(event) {
                event.preventDefault();
                var name_shop = $("input#name_shop").val();
                if (name_shop == "") {
                    $("#errorName").fadeIn().text("Name required.");
                    $("input#name_shop").focus();
                    return false;
                } else {
                    $("#errorName").hide()
                }
                var category = $("select#category").val();
                if (category == "") {
                    $("#errorCategory").fadeIn().text("Category required");
                    return false;
                } else {
                    $("#errorCategory").hide()
                }
                var description = $("input#description").val();
                if (description == "") {
                    $("#errorDescription").fadeIn().text("Description required");
                    return false;
                } else {
                    $("#errorDescription").hide()
                }

                var city = $("select#city_shop").val();
                if (city == "") {
                    $("#errorcity").fadeIn().text("Country required");
                    return false;
                } else {
                    $("#errorcity").hide()
                }
                var price = $("input#price_shop").val();
                if (price == "") {
                    $("#errorPrice").fadeIn().text("Price required");
                    return false;
                } else {
                    $("#errorPrice").hide()
                }
                var date = $("input#date").val();
                if (date == "") {
                    $("#errorDate").fadeIn().text("Date required");
                    return false;
                } else {
                    $("#errorDate").hide()
                }
                var img = $("input#img_shop").val();
                if (img == "") {
                    $("#errorImg").fadeIn().text("Img required");
                    return false;
                } else {
                    $("#errorImg").hide()
                }

                $.ajax({
                    type: "POST",
                    url: "./server/newPost.php",
                    data: new FormData(this),
                    dataa: $("#frm").serialize(),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(res) {
                        $("#Successfully").fadeIn().text("Successfully add Post");
                    },
                })

            })
        })
    </script>
    <?php include("./footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>