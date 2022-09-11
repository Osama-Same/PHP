<?php

//What is a Regular Expression?
//is a sequence of characters that forms a search pattern. When you search for data in a text.

//Syntax
//$exp = "/w3schools/i";

//Regular Expression Functions:

//Using preg_match()
$str = "Visit W3Schools";
$pattern = "/W3Schools/i";
echo preg_match($pattern, $str); // Outputs 1

//Using preg_match_all()
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo "<br>";
echo preg_match_all($pattern, $str); 

//Using preg_replace()

$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo "<br>";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"