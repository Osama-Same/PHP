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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<form method="post" action="upload.php" enctype="multipart/form-data">

			<?php
			if (isset($_GET['error'])) {
				echo "<p class='error'>";
				echo htmlspecialchars($_GET['error']);
				echo "</p>";
			}
			$src = "./uploads/";
			?>
			<input type="file" name="images[]" multiple>
			<input type="text" name="description" id="description" />
			<button type="submit" name="upload">
				Upload</button>
		</form>
	</nav>



	<br>
	<div class='container mt-5'>
		<h1 style="text-align: center;">Data Post</h1>

		<table class='table table-bordered'>
			<thead>
				<th>Image</th>
				<th>description</th>
				<th>ID</th>
			</thead>
			<tbody id='tbody'>
				<?php
				$con = mysqli_connect("localhost", "csctest", "0000", "osama");
				$sql = "select * from images";
				$res = $con->query($sql);
				while ($row = $res->fetch_assoc()) {
					echo "
            <tr uid='{$row["id"]}'>
			<td><img src=" . $src . "/" . $row['img_name'] . " /></td>
			<td>{$row["description"]}</td>
              <td>{$row["id"]}</td>
            </tr>
          ";
				}
				?>
			</tbody>
		</table>
	</div>


</body>

</html>