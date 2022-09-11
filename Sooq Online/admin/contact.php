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
                                <label>ID</label>
                                <input type='text' name='id_user' id='id_user' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>Name</label>
                                <input type='text' name='name' id='name' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>Email</label>
                                <input type='text' name='email' id='email' required class='form-control'>
                            </div>

                            <div class='form-group'>
                                <label>Password</label>
                                <input type='text' name='password' id='password' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>Phone</label>
                                <input type='text' name='phone' id='phone' required class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label>imge</label>
                                <input type='file' name='img' id='img' required class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label>Admin And User</label>
                                <input type='text' name='admin_user' id='admin_user' required class='form-control'>
                            </div>
                            <input type='submit' value='Submit' class='btn btn-success'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class='container mt-5'>

            <h1 style="text-align: center;">Data Users</h1>


            <table class='table table table-dark table-striped'>
                <thead>
                    <th>ID</th>
                    <th>ID USER</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Massage</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody id='tbody'>
                    <?php
                    $con = mysqli_connect("localhost", "csctest", "0000", "mobile");
                    $sql = "select * from contact";
                    $res = $con->query($sql);
                    $src = "./server/uploadsUser/";
                    while ($row = $res->fetch_assoc()) {
                        echo "
                    <tr uid='{$row["contact_id"]}'>
                      <td>{$row["contact_id"]}</td>
                      <td>{$row["id_user"]}</td>
                      <td>{$row["contact_name"]}</td>
                      <td>{$row["contact_email"]}</td>
                      <td>{$row["contact_phone"]}</td>
                      <td>{$row["contact_massage"]}</td>
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
    <script></script>
</body>

</html>