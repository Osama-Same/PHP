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
        <?php include("./navbar.php"); ?>
        <div class="text-box">
            <h1>Contact US</h1>
            <p>WE HAVE OVER 20 YEARS OF EXPERIENCE</p>
        </div>
    </div>
    <div class="contact">

        <p>Your messages are the secret of our development, so do not hesitate at all in any note or suggestion that will reach us and be of great interest to us.</p>

        <div class="row-contact">
            <div class="col-contact">
                <form action="./server/contact.php" method="POST" enctype="multipart/form-data">
                    <div class="form-contact">

                        <div>
                            <input type="hidden" placeholder="Name..." name="id_user" class="form-control" value='<?php echo $_SESSION["id_user"] ?>' />
                        </div>
                        <div>
                            <input type="text" placeholder="Name..." name="contact_name" class="form-control" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email..." name="contact_email" class="form-control" />
                        </div>

                        <div>
                            <input type="text" placeholder="Phone..." name="contact_phone" class="form-control" />
                        </div>

                        <div>
                            <textarea placeholder="Message..." name="contact_massage" class="form-control"></textarea>
                        </div><br>
                        <div>
                            <button type="submit" class="btn btn-link" name="contact">Send</button>
                        </div>
                        <div>
                            <?php if (isset($_GET['success'])) { ?>
                                <small style="color: green; text-align: center;"><?php echo $_GET['success']; ?></small>
                            <?php } ?>
                            <?php if (isset($_GET['error'])) { ?>
                                <small style="color: red; text-align: center;"><?php echo $_GET['error']; ?></small>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-contact">
                <img src="https://cdn.iphoneincanada.ca/wp-content/uploads/2019/02/iphone-8.jpeg" />
            </div>
        </div>
    </div>
    <?php include("./footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>