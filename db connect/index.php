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
    $q = "INSERT INTO `pizzas` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES (NULL, 'pizzaa2', 'cheese2', 'z1@gm.com', current_timestamp());";
    $connection->exec($q);
  }
  catch (PDOException $e){
    echo "failed" . $e->getMessage();
  }

?>