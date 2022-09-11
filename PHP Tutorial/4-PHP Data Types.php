<?php

//PHP String

$y = 'Hello world!';

echo "<br>";
var_dump($y) ;

//PHP Integer
$x =10;
echo "<br>";
var_dump($x);//var_dump() returns the data type and value

// PHP Float
$x = 10.365;
echo "<br>";
var_dump($x);

// PHP Boolean

$x = true;
$y = false;
echo "<br>";
var_dump($x);

//PHP Array
$cars = array("Volvo","BMW","Toyota");
echo "<br>";
var_dump($cars);

//PHP Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo "<br>";
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

// PHP NULL Value

$x = "Hello world!";
$x = null;
echo "<br>";
var_dump($x);
?>