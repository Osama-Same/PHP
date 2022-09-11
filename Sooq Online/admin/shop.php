<?php
session_start();
include("../database/connect.php");

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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
   <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav h3 {
            text-align: center;
            color: white;
            font-size: 20px;
            padding-top: 10px;
        }

        .sidenav ul li {
            list-style: none;
            display: inline-block;
            padding: 8px;
            text-align: center;
            position: relative;
            padding-left: 11px;
        }

        .sidenav ul li a {
            color: #818181;
            font-size: 15px;
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            display: block;
            text-decoration: none;
        }


        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
            font-size: 28px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }



        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 15px;
            }
        }

        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #454d55;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="sidenav">
        <h3>Admin</h3>
        <ul>
            <li><a href="./users.php"><i class="fa fa-users"></i> Users</a></li>
            <li><a href="./shop.php"><i class="fa fa-shopping-cart"></i> Shop</a></li>
            <li><a href="./contact.php"><i class="fa fa-address-book"></i> Contact</a></li>
            <li><a href="./Category.php"><i class="fa fa-address-book"></i> Category</a></li>
        </ul>
    </div>

    <!-- Page content -->
    <div class="main">
        <nav class="navbar navbar-light bg-light">
            <p class='text-right'><a href='#' class='btn btn-success' id='add_record'>Add User</a></p>
            <p class='text-right'><a href='../logout.php' class='btn btn-success'>Logout</a></p>
        </nav>
        <div class="modal" tabindex="-1" role="dialog" id='modal_frm'>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">User Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id='frm' action="./server/users.php" method="POST" enctype="multipart/form-data">
                            <input type='hidden' name='action' id='action' value='Insert'>
                            <input type='hidden' name='id' id='id_u' value='0'>
                            <div class='form-group'>
                                <input type='hidden' name='id_shop' id='id_shop' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <input type='hidden' name='id_user' id='id_user' value='<?php echo $_SESSION["id_user"] ?>' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <input type='hidden' name='name' id='name' value='<?php echo $_SESSION["name"] ?>' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <input type='hidden' name='img' id='img' value='<?php echo $_SESSION["img"] ?>' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>Name Shop</label>
                                <input type='text' name='name_shop' id='name_shop' required class='form-control'>
                            </div>
                            <label>Name Shop</label>
                            <div class='form-group' >
                                <select name="category" id="category" class="form-select">
                                    <option selected>Open this select menu</option>
                                    <option value="Mobile">Mobile</option>
                                    <option value="car">Car</option>
                                    <option value="computer">computer</option>
                                </select>
                            </div>

                            <div class='form-group'>
                                <label>img_shop</label>
                                <input type='file' name='img_shop' id='img_shop' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>description</label>
                                <input type='text' name='description' id='description' required class='form-control'>
                            </div>
                            <div class='form-group' class='form-control'>
                                <label>city_shop</label>
                                <input type='text' name='city_shop' id='city_shop' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>Price Shop</label>
                                <input type='text' name='price_shop' id='price_shop' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>Date</label>
                                <input type='date' name='date' id='date' required class='form-control'>
                            </div>
                            <input type='submit' value='Submit' class='btn btn-success'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class='container mt-5'>



            <table class='table table table-dark table-striped'>
                <thead>
                    <th>ID Shop</th>
                    <th>ID User</th>
                    <th>Name User</th>
                    <th>img User</th>
                    <th>name shop</th>
                    <th>Category</th>
                    <th>image Shop</th>
                    <th>Description</th>
                    <th>city Shop</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody id='tbody'>
                    <?php
                    $con = mysqli_connect("localhost", "csctest", "0000", "mobile");
                    $sql = "select * from shop";
                    $res = $con->query($sql);
                    $src = "./server/imgShop/";
                    $src_user = "./server/uploadsUser/";
                    while ($row = $res->fetch_assoc()) {
                        echo "
                    <tr uid='{$row["id_shop"]}'>
                      <td>{$row["id_shop"]}</td>
                      <td>{$row["id_user"]}</td>
                      <td>{$row["name"]}</td>
                      <td><img src=" . $src_user . "/" . $row['img'] . " style='width: 90px; height: 60px;' /></td>
                      <td>{$row["name_shop"]}</td>
                      <td>{$row["category"]}</td>
                      <td><img src=" . $src . "/" . $row['img_shop'] . " style='width: 90px; height: 60px;' /></td>
                      <td>{$row["description"]}</td>
                      <td>{$row["city_shop"]}</td>
                      <td>{$row["price_shop"]}</td>
                      <td>{$row["date"]}</td>
                      <td><a href='#' class='btn btn-primary  btn-sm edit'>Edit</a></td>
                      <td><a href='#' class='btn btn-danger  btn-sm delete '>Delete</a></td>
                    </tr>
                           ";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var current_row = null;
            $("#add_record").click(function() {
                $("#modal_frm").modal();
            });
            $("#frm").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "./server/shop.php",
                    type: "post",
                    data: new FormData(this),
                    dataa: $("#frm").serialize(),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#frm").find("input[type='submit']").val('Loading...');
                    },
                    success: function(res) {
                        if (res) {
                            if ($("#uid").val() == "0") {
                                $("#tbody").append(res);
                            } else {
                                $(current_row).html(res);
                            }
                        } else {
                            alert("Failed Try Again");
                        }
                        $("#frm").find("input[type='submit']").val('Submit');
                        clear_input();
                        $("#modal_frm").modal('hide');
                    }
                });
            });
            $("body").on("click", ".edit", function(event) {
                event.preventDefault();
                current_row = $(this).closest("tr");
                $("#modal_frm").modal();
                var id = $(this).closest("tr").attr("id_u");
                var id_shop = $(this).closest("tr").find("td:eq(0)").text();
                var id_user = $(this).closest("tr").find("td:eq(1)").text();
                var name_user = $(this).closest("tr").find("td:eq(2)").text();
                var img_user = $(this).closest("tr").find("td:eq(3)").text();
                var name_shop = $(this).closest("tr").find("td:eq(4)").text();
                var category = $(this).closest("tr").find("td:eq(5)").text();
                var img_shop = $(this).closest("tr").find("td:eq(6)").text();
                var description = $(this).closest("tr").find("td:eq(7)").text();
                var city_shop = $(this).closest("tr").find("td:eq(8)").text();
                var price_shop = $(this).closest("tr").find("td:eq(9)").text();
                var date = $(this).closest("tr").find("td:eq(10)").text();

                $("#action").val("Update");
                $("#id_shop").val(id_shop);
                $("#id_user").val(id_user);
                $("#name").val(name);
                $("#name_shop").val(name_shop);
                $("#category").val(category);
                $("#img_shop").val(img_shop);
                $("#city_shop").val(city_shop);
                $("#description").val(description);
                $("#price_shop").val(price_shop);
                $("#date").val(date);
            });
        });
    </script>
</body>

</html>