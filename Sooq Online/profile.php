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
include("./databases/connect.php");

if (isset($_POST["update"])) {
    $id_user = mysqli_real_escape_string($conn, $_POST["id_user"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $img = $_FILES['img']["name"];
    $tmp_name = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp_name, "./img/user/" . $img);
    $sql = "update users SET name='{$name}',email='{$email}',password='{$password}',phone='{$phone}',img='{$img}',country='$country' where id_user ='{$_SESSION['id_user']}'";
    if ($conn->query($sql)) {
        //   echo true;
    } else {
        //   echo false;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="./css/profile.css">
</head>

<body>
    <?php
    include("./databases/connect.php");
    $sql = "select * from users where id_user = '{$_SESSION['id_user']}'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) { ?>


            <div class="header-blue">
                <?php include("./navbar.php") ?>
                <div class="text-box">
                    <h1>Profile</h1>
                    <p>WE HAVE OVER 20 YEARS OF EXPERIENCE</p>
                </div>
            </div>
           
            <div class="container rounded bg-black mt-5">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" src="./img/user/<?php echo $row["img"] ?>" height="120" width="120"><br>
                            <span class="font-weight-bold"><?php echo $row["name"] ?></span><span class="text-black-50"><?php echo $row["email"] ?></span>
                            <span><?php echo $row["country"] ?></span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                    <h6>Information</h6>
                                </div>
                                <h6 class="text-right">
                                    <button class="btn btn-primary profile-button" type="button" id='add_record'>Edit Profile</button>
                                </h6>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">Name</div>
                                <div class="col-md-6"><?php echo $row["name"] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">Email</div>
                                <div class="col-md-6"><?php echo $row["email"] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">Password</div>
                                <div class="col-md-6"><?php echo $row["password"] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">Phone</div>
                                <div class="col-md-6"><?php echo $row["phone"] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">Country</div>
                                <div class="col-md-6"><?php echo $row["country"] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      



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
                            <form id='frm' action="./profile.php" method="POST" enctype="multipart/form-data">
                                <input type='hidden' name='action' id='action' value='Insert'>
                                <input type='hidden' name='id' id='id_u' value='0'>
                                <div class='form-group'>
                                    <label>ID</label>
                                    <input type='hidden' name='id_user' id='id_user' required class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label>Name</label>
                                    <input type='text' name='name' id='name' value="<?php echo $row['name'] ?>" required class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label>Email</label>
                                    <input type='text' name='email' id='email' value="<?php echo $row['email'] ?>" required class='form-control'>
                                </div>

                                <div class='form-group'>
                                    <label>Password</label>
                                    <input type='text' name='password' id='password' value="<?php echo $row['password'] ?>" required class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label>Phone</label>
                                    <input type='text' name='phone' id='phone' value="<?php echo $row['phone'] ?>" required class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label>image</label>
                                    <input type='file' name='img' id='img' required class='form-control' value="<?php echo $row['img'] ?>" />
                                </div>
                                <div class='form-group'>
                                    <label>Country</label>
                                    <input type='text' name='country' id='country' value="<?php echo $row['country'] ?>" required class='form-control' />
                                </div>
                                <input type='submit' value='Submit' name="update" class='btn btn-success'>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
    
    <script>
        $(document).ready(function() {
            var current_row = null;
            $("#add_record").click(function() {
                $("#modal_frm").modal();
            });
        });
    </script>
    <?php include("./footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>