<?php 
//Creating (Declaring) PHP Variables
//In PHP, a variable starts with the $ sign, followed by the name of the variable:
$txt = "Hello world!";
$x = 5;
$y = 10.5;


//Output Variables
//echo $txt. $x.+ $y;
//echo $x + $y;


//PHP Variables Scope

//PHP has three different variable scopes:

//    local
//    global
//    static

// Global and Local Scope

$a = 5; // global scope
$b = 10;
function myTest() {
     global $a,$b; // global scope
     $c = 5; // local scope
     static $v = 0; // static
    // echo $a + $b + $c;
     echo $v;
     $v++;         
  }
  myTest();
  


?>


