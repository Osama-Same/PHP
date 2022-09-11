<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    td,
    th {
      border: 1px solid black;
      padding: 5px;
    }

    th {
      text-align: left;
    }
  </style>
</head>

<body>

  <?php
  $q = intval($_GET['q']);
  $servername = "localhost";
  $username = "csctest";
  $password = "0000";
  $dbname = "osama";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  mysqli_select_db($conn, "ajax_demo");
  $sql = "SELECT * FROM users ";
  $result = mysqli_query($conn, $sql);

  echo "<table>
<tr>
<th>name</th>
<th>email</th>
<th>password</th>
<th>phone</th>
<th>adminanduser</th>
</tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['adminanduser'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($conn);
  ?>
</body>

</html>