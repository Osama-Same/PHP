<?php
session_start();
include('../databases/connect.php');

if (isset($_POST['contact'])) {

    $id_user = $_POST['id_user'];
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $contact_massage = $_POST['contact_massage'];

    $sql = "INSERT INTO contact(id_user,contact_name, contact_email ,contact_phone , contact_massage) 
        VALUES('$id_user','$contact_name', '$contact_email' ,'$contact_phone' ,'$contact_massage')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../contact.php?success=Your message was sent successfully  ");
    } else {
        header("Location: ../contact.php?error=unknown error occurred");
    }
}
