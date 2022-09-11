<?php

// For loop
/*
Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
*/

for ($x = 0; $x <= 12; $x++) {
  echo "The number is: $x <br>";
}


for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

//Syntax
/*
foreach ($array as $value) {
    code to be executed;
  }
  */

  $colors = array("red", "green", "blue", "yellow");
  foreach($colors as $value){
    echo "$value <br>";
  }

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

//PHP Break and Continue

//PHP Break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is break: $x <br>";
   
  }

  //PHP Continue
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is continue: $x <br>";
  }
?>

