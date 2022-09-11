<?php

$con = mysqli_connect("localhost", "csctest", "0000", "osama");

$action = $_POST["action"];
if ($action == "Insert") {
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);
  $phone = mysqli_real_escape_string($con, $_POST["phone"]);
  $adminanduser = mysqli_real_escape_string($con, $_POST["adminanduser"]);
  $sql = "insert into users (name,email,password,phone,adminanduser) values ('{$name}','{$email}','{$password}','{$phone}','{$adminanduser}') ";
  if ($con->query($sql)) {
    $id = $con->insert_id;
    echo "
        <tr uid='{$id}'>
          <td>{$name}</td>
          <td>{$email}</td>
          <td>{$password}</td>
          <td>{$phone}</td>
          <td>{$adminanduser}</td>
          <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
          <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
        </tr>";
  } else {
    echo false;
  }
} else if ($action == "Update") {
  $id = mysqli_real_escape_string($con, $_POST["id"]);
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);
  $phone = mysqli_real_escape_string($con, $_POST["phone"]);
  $adminanduser = mysqli_real_escape_string($con, $_POST["adminanduser"]);
  $sql = "update users SET name='{$name}',email='{$email}',password='{$password}',phone='{$phone}',adminanduser='{$adminanduser}' where id_user='{$id}'";
  if ($con->query($sql)) {
    echo "
        <td>{$name}</td>
        <td>{$email}</td>
        <td>{$password}</td>
        <td>{$phone}</td>
        <td>{$adminanduser}</td>
        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>";
  } else {
    echo false;
  }
} else if ($action == "Delete") {
  $id = $_POST["uid"];
  $sql = "delete from users where id_user='{$id}'";
  if ($con->query($sql)) {
    echo true;
  } else {
    echo false;
  }
}
