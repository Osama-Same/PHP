<!DOCTYPE html>
<html>

<head>
    <title>Create</title>
</head>

<body>
    <div>
        <form action="PHP/Create.php" method="post">

            <h4>Create</h4>
            <hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div>
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" value="
                <?php if (isset($_GET['name']))
                    echo ($_GET['name']); ?>" placeholder="Enter name">
            </div>

            <div>
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" value="
                <?php if (isset($_GET['email']))
                    echo ($_GET['email']); ?>" placeholder="Enter email">
            </div>

            <button type="submit"  name="create">Create</button>
            <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
</body>

</html>