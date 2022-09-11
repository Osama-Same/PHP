
<?php

/*
Syntax
function functionName() {
  code to be executed;
}
*/

//Create a User Defined Function in PHP
function writeMsg()
{
  echo "Hello world!<br><br>";
}
writeMsg(); // call the function

// PHP Function Arguments

function familyName($fname)
{
  echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function nameAndAge($fname, $age)
{
  echo "$fname Refsnes. Born in $age <br><br>";
}
nameAndAge("osama", "19");


//PHP is a Loosely Typed Language
function addNumber(int $a, int $b)
{
  return $a + $b;
}
echo addNumber(5, 5);


//PHP Default Argument Value
function setHeight(int $minheight = 50)
{
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);


//PHP Functions - Returning values

function sum(int $x, int $y)
{
  $z = $x + $y;
  return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";

//PHP Return Type Declarations
function addNumbers1(float $a, float $b): float
{
  return $a + $b;
}
echo addNumbers1(1.2, 5.2);

function addNumbers2(float $a, float $b): int
{
  return (int)($a + $b);
}
echo "<br>";
echo addNumbers2(1.2, 5.2);

//Passing Arguments by Reference

function add_five(&$value) {
  $value += 5;
}
$num = 2;
add_five($num);
echo "<br>";
echo $num;
?>