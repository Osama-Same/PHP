<?php


include("../backend/database/connect.php");

// if user clicks like or dislike button
if (isset($_POST['action'])) {
    $id_user = $_POST['id_user'];
    $id_shop = $_POST['id_shop'];
    $action = $_POST['action'];
    switch ($action) {
        case 'like':
            $sql = "INSERT INTO likee (id_user, id_shop, rating_action) 
                  VALUES ($id_user, $id_shop, 'like') 
                  ON DUPLICATE KEY UPDATE rating_action='like'";
            break;

        case 'unlike':
            $sql = "DELETE FROM likee WHERE id_user=$id_user AND post_id=$id_shop";
            break;

        default:
            break;
    }

    // execute query to effect changes in the database ...
    mysqli_query($conn, $sql);

    exit(0);
}
