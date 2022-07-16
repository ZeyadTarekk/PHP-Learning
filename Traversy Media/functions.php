<?php

  function callMe() {
    echo "Hello Zeyad <br>";
  }

  function callMe2($var = "NO one") {
    echo "Hello $var <br>";
  }

  callMe();
  callMe();
  callMe2("Zeyad");
  callMe2("Ahmed");
  callMe2();

  function addTwoNumbers($n1,$n2) {
    return $n1 + $n2;
  }

  $sum = addTwoNumbers(3,5);
  echo $sum;

  echo "<br>";

  $myNo = 3;
  echo $myNo . "<br>";

  function increaseNo($no) {
    $no++;
    echo $no . "<br>";
  }
  increaseNo($myNo);
  echo $myNo . "<br>";
?>