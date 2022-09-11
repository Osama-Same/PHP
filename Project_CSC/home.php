<?php

# database connection file
include './PHP/db.conn.php';

# fetching images
$sql  = "SELECT * FROM images ORDER BY id DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();

$images = $stmt->fetchAll();
$description = $stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .container {
            display: grid;
            grid-template-columns: 80px 200px auto 40px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <form method="post" action="upload.php" enctype="multipart/form-data">

            <?php
            if (isset($_GET['error'])) {
                echo "<p class='error'>";
                echo htmlspecialchars($_GET['error']);
                echo "</p>";
                $src = "./uploads/";
            }
            $src = "./uploads/";
            ?>

            <input type="file" name="images[]" class="form-control" multiple>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter to description" />
            <button type="submit" name="upload" class="btn btn-primary mb-3">Upload</button>
        </form>

        <p class='text-right'><a href='./login.php' class='btn btn-success' id='add_record'>Logout</a></p>
    </nav>

    <?php
    $con = mysqli_connect("localhost", "csctest", "0000", "osama");
    $sql = "select * from images";
    $res = $con->query($sql);
    while ($row = $res->fetch_assoc()) {
        echo "
        <div class='container'>
        <div class= 'row-cols-4'>
        <div class='col'>
          <div class='col'>
          <div class='card' style='width: 18rem;'>
          <img src=" . $src . "/" . $row['img_name'] . " />
          <div class='card-body'>
            <h5 class='card-title'>{$row["description"]}</h5>
           
        <button type='submit' name='' class='btn btn-primary mb-3'>Like</button>
        <button type='submit' name=''class='btn btn-primary mb-3'>comment</button>
          </div>
        </div>
          </div>
          </div>
        </div>
      </div>
          ";
    }
    ?>
    <script>
    
    </script>

    <body>

        <html>