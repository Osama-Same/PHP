<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "<br>";
  echo "Have a good day!";
} else {
  echo "<br>";
  echo "Have a good night!";
}
?>