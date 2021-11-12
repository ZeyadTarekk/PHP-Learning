<?php
  if(isset($_REQUEST['name'])){
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
</head>
<body>
  <form action="request.php" method="GET">
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>E-Mail</label> <br>
      <input type="text" name = "mail">
    </div>
    <input type="submit" value = "Submit">
  </form>
</body>
</html>