<?php
  echo date('d') . "<br>";
  echo date('m') . "<br>";
  echo date('y') . "<br>";
  echo date('y/m/d') . "<br>";
  echo date('l') . "<br>";
  echo (date('y/m/d')==date('y/M/D'))?"EQUAL":"NOT EQUAL" . "<br>";
  echo date('h') . "<br>";
  echo date('i') . "<br>";
  echo date('s') . "<br>";
  echo date('A') . "<br>";
  date_default_timezone_set("EET");
  // date_default_timezone_get();
  echo date('h:i:s a') . "<br>"; 
  $timestamp1 = mktime(10,14,54,8,21,2001);
  echo $timestamp1 . "<br>";
  echo date('d/m/Y h:i:s',$timestamp1). "<br>";
  $timestamp2 = strtotime("7:00:23pm march 22 2016");
  echo date('d/m/Y h:i:s',$timestamp2). "<br>";
?>