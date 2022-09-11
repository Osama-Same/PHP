<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        .sidenav h3{
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
    </style>
</head>

<body>

    <div class="sidenav">
        <h3>Admin</h3>
        <ul>
            <li><a href="./users.php"><i class="fa fa-users"></i> Users</a></li>
            <li><a href="./shop.php"><i class="fa fa-shopping-cart"></i>  Shop</a></li>
            <li><a href="./contact.php"><i class="fa fa-address-book"></i>  Contact</a></li>
            <li><a href="./Category.php"><i class="fa fa-address-book"></i> Category</a></li>
        </ul>
    </div>

    <!-- Page content -->
    <div class="main">
        contact
    </div>
</body>

</html>