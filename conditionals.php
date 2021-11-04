<?php
  echo "Hello Zeyad <br>";
  echo (true==="1")?"TRUE<br>":"FALSE<br>";


  $num = 11;

  // if($num == 5) {
  //   echo "5 Passed!<br>";
  // } elseif($num == 6) {
  //   echo "6 Passed!<br>";
  // } else {
  //   echo "Didn't pass <br>";
  // }

  if($num > 4 AND $num < 10) {
    echo "5 Passed <br>";
  }

  /* Logical operator
    AND => &&
    OR => ||
    xor
  */

  $myColor = "RED";
  switch($myColor) {
    case "RED":
      echo "Your color is red<br>";
      break;
    case "BLACK":
      echo "Your color is black<br>";
      break;
  }
?>