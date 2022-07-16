<?php
  session_start();
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Session 2</title>
</head>
<body>
  <h5>Thank you <?php echo $name;?> , You have subscribed with <?php echo $email;?></h5>
  <a href="page3.php">Go to page 3k</a>
</body>
</html>