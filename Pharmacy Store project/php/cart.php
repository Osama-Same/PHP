<?Php
session_start();

include("connect.php");

switch($_GET["action"] ){	

	case "add":{
		
		$id = $_POST["ID"];
		$product_id = $_POST["PRODUCT_ID"];

		$query = "INSERT INTO `cart` (`USER_ID`,`PRODUCT_ID`)
				VALUES 
				('$id','$product_id')";
		
		$link->query($query);
		
		echo '<script type="text/javascript">alert("Added to yor Cart");
		window.location.href="../products.php";
		</script>';

		break;
	}
	
	
	case "delete":{
		
		$user_id = $_GET["user_id"];
		$product_id = $_GET["product_id"];
		$query = "DELETE FROM `cart` WHERE `USER_ID`=$user_id AND`PRODUCT_ID`=$product_id";
		$link->query($query);

		header("Location: ../cart.php");

		break;
	}
	
	
	
	case "order":{
		
		$id = $_POST["ID"];
		
		$query = "SELECT * FROM `cart` WHERE `USER_ID`=$id";
		$result = $link->query($query);
		while($array = $result->fetch_array()){
			$product_id = $array["PRODUCT_ID"];
			$query1 = "INSERT INTO `orders` (`USER_ID`,`PRODUCT_ID`)
				VALUES 
				('$id','$product_id')";
			$link->query($query1);
		}

		$query = "DELETE FROM `cart` WHERE `USER_ID`=$id ";
		$link->query($query);

		header("Location: ../cart.php");

		break;
	}
	
	
	
	
		
}
?>