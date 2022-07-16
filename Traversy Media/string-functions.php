<?php 
  $output = substr("Hello" , 1);
  $output = substr("Hello" , -3,2);
  echo $output . "<br>";
  
  
  $output = strlen("zeyad");
  echo $output . "<br>";

  $output = strpos("ZEYADZEYAD","ZEYAD",1);
  echo $output . "<br>";


  $output = trim("zzzzzeyadzzzz",'z');
  echo $output . "<br>";
  
  $output = strtoupper("A1bdsaw2123@");
  echo $output . "<br>";

  $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quod quam enim natus minima illo, pariatur possimus dignissimos mollitia perferendis, tempore corporis? Reiciendis harum, nemo voluptate explicabo minima laborum libero?";

  $compressed = gzcompress($string);
  echo $string . "<br>";
  echo $compressed . "<br>";
  echo gzuncompress($compressed);
?>