<?php
  session_start();
    $name = isset( $_SESSION['name']) ? $_SESSION['name']:'Guest' ;
    $email = isset( $_SESSION['email']) ? $_SESSION['email']:'Guest' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello <?php echo $name;?></h1>
</body>
</html>