<?php
//PHP Arrays
//Create an Array in PHP array()
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." . "<br>";
echo count($cars); //Get The Length of an Array

// PHP Indexed Arrays
//Loop Through an Indexed Array
//$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for ($i = 0; $i < $arrlength; $i++) {
    echo "<br>";
    echo $cars[$i];
    echo "<br>";
}


//PHP Associative Arrays
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $value) {
    echo "key = " . $x . " , value = " . $value;
    echo "<br>";
}


//PHP Multidimensional Arrays
//PHP - Two-dimensional Arrays
$carss = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $carss[0][0] . ": In stock: " . $carss[0][1] . ", sold: " . $carss[0][2] . ".<br>";
echo $carss[1][0] . ": In stock: " . $carss[1][1] . ", sold: " . $carss[1][2] . ".<br>";
echo $carss[2][0] . ": In stock: " . $carss[2][1] . ", sold: " . $carss[2][2] . ".<br>";
echo $carss[3][0] . ": In stock: " . $carss[3][1] . ", sold: " . $carss[3][2] . ".<br>";


for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $carss[$row][$col] . "</li>";
    }
    echo "</ul>";
}


  //PHP Sorting Arrays

  //PHP - Sort Functions For Arrays
/*
  sort() - sort arrays in ascending order
  rsort() - sort arrays in descending order
  asort() - sort associative arrays in ascending order, according to the value
  ksort() - sort associative arrays in ascending order, according to the key
  arsort() - sort associative arrays in descending order, according to the value
  krsort() - sort associative arrays in descending order, according to the key
*/

//Sort Array in Ascending Order - sort()
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

//Sort Array in Descending Order - rsort()
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

//Sort Array (Ascending Order), According to Value - asort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

//Sort Array (Descending Order), According to Key - krsort()

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);