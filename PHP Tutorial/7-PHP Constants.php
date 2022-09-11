<?php

//Create a PHP Constant
//To create a constant, use the define() function.
//Syntax  define(name, value, case-insensitive)


//Create a constant with a case-sensitive name

define("GREETING", "case-sensitive");
echo GREETING;

//PHP Constant Arrays

define("cars", ["Alfa Romeo","BMW","Toyota"]);
echo "<br>";
echo cars[1];

//Constants are Global

define("GREETIN", "Constants are Global");

function myTest() {
    echo "<br>";
  echo GREETIN;
}
 
myTest();
?>