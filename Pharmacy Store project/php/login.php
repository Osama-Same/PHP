<?Php
session_start();

include("connect.php");

$type = $_POST["TYPE"];

$pass = $_POST["PASSWORD"];
$email = $_POST["EMAIL"];

switch($type){
	case "0":{
		$query = "SELECT * FROM `admin` WHERE `EMAIL` = '$email'  AND `PASSWORD` = '$pass'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = mysqli_fetch_array($result);
			$_SESSION["TYPE"] = $type;
			$_SESSION["ID"] = $array["ID"];
			$_SESSION["NAME"] = $array["NAME"];
			header("Location: ../admin.php");
		}else{
			echo"<script>
			alert('Wrong Login !!');
			location.href = '../login.php';
			</script>";
		}
		break;
	}
	case "1":{
		$query = "SELECT * FROM `user` WHERE `EMAIL` = '$email'  AND `PASSWORD` = '$pass'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = mysqli_fetch_array($result);
			$_SESSION["TYPE"] = $type;
			$_SESSION["ID"] = $array["ID"];
			$_SESSION["NAME"] = $array["NAME"];
			
			header("Location: ../user.php");
		}
		break;
	}
	
	
	
	
}


?>