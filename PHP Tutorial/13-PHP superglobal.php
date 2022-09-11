
<?php
//PHP $GLOBALS
// is used to access global variables from anywhere in the PHP script
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

//PHP $_SERVER
//is a PHP super global variable which holds information about 
//headers, paths, and script locations.
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


//PHP $_REQUEST
//PHP $_POST
//PHP $_GET
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>