
<?php
  if(isset($_POST['submit'])){
    session_start(); //start the session
    $_SESSION['name']=htmlentities($_POST['name']);
    $_SESSION['email']=htmlentities($_POST['email']);
    header('Location: page2.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sessions</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
  <label for="email">Email address:</label>
  <br>
    <input
      type="text"
      id="email"
      name="email"
      placeholder="e.g. mario@example.com"
    />
    <br>
  <label for="name" >Name:</label>
  <br>
    <input
      name="name"
      type="text"
      id="name"
      placeholder="e.g. Mario"
    />
  <div class="mb-4 mt-5 ">
    <textarea
      name="message"
      id="query"
      placeholder="query"
    ></textarea>
  </div>
  <button type="submit" name="submit" class="">Submit</button>
</form>

</body>
</html>