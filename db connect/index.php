<?php

  $dsn = 'mysql:host=localhost;dbname=mydatabase';
  $user = 'root';
  $pass = '1234';
  $option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'

  );
  
  try {
    $connection = new PDO($dsn,$user,$pass,$option);
    // echo "Connected successfully";
  }
  catch (PDOException $e){
    echo "failed" . $e->getMessage();
  }

?>