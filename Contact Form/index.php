<?php

$msg = '';
$msgClass = '';
if(filter_has_var(INPUT_POST,'submit')){
  // echo "Submitted";
  //get form data
  $name = htmlspecialchars($_POST['name']) ;
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  //check required fields

  if(!empty($email)&& !empty($name)&& !empty($message)){

    // check Email
    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
      //failed
      $msg = 'Please Use a valid email';
      $msgClass = 'alert-danger';
    }
    else {
      //Success
      // echo "Passed";
      
      $toEmail = 'zizotarek905@gmail.com';
      $subject = 'Testing contact form'.$name;
      $body = '<h2>Contact Request </h2>
              <h4>Name</h4><p>'.$name.'</p>
              <h4>Email</h4><p>'.$email.'</p>
              <h4>Message</h4><p>'.$message.'</p>
      ';
      $headers = "MIME-Version 1.0"."\r\n";
      $headers.= "Content-Type:text/html;charset=UTF-8" . "\r\n";
      $headers.= "From: " .$name;
      $headers.= '<' .$email. '>'."\r\n";
      echo $toEmail."<br>".$subject."<br>".$headers;
      if(mail($toEmail, $subject, $body, $headers)){
        $msg = "Your E-mail has been sent";
        $msgClass = 'alert-success';
      }
      else {
        $msg = "Your E-mail wasn't sent";
        $msgClass = 'alert-danger';
      }

    }
  }
  else {
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
  <title>Contact Us</title>
</head>
<body>
<div class="container-lg">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Contact Us</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php">Action</a></li>
            <li><a class="dropdown-item" href="index.php">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container-lg my-5">
        <div class="text-center">
          <h2>Get in Touch</h2>
          <p class="lead">
            Questions to ask? Fill out the form to contact me directly...
          </p>
        </div>
        <div class="row justify-content-center my-5">
          <div class="col-lg-6">
            <!-- <?php if($msg !=''):?> -->
              <div class="alert <?php echo $msgClass;?>"><?php echo $msg?></div>
            <!-- <?php else:?>
              <div class="alert <?php echo $msgClass;?>"><?php echo $msg?></div> -->
            <!-- <?php endif; ?> -->
            

              
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
              <label for="email" class="form-label">Email address:</label>
              <div class="input-group mb-4">
                <span class="input-group-text">
                  <i class="bi bi-envelope-fill text-secondary"></i>
                </span>
                <input
                  type="text"
                  id="email"
                  name="email"
                  value="<?php if(!empty($email)) echo $email; ?>"
                  class="form-control"
                  placeholder="e.g. mario@example.com"
                />
              </div>
              <label for="name" class="form-label">Name:</label>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="bi bi-person-fill text-secondary"></i>
                </span>
                <input
                  name="name"
                  type="text"
                  id="name"
                  value="<?php if(!empty($name)) echo $name;?>"
                  class="form-control"
                  placeholder="e.g. Mario"
                />
              </div>
              <div class="mb-4 mt-5 form-floating">
                <textarea
                  name="message"
                  class="form-control"
                  id="query"
                  style="height: 140px"
                  placeholder="query"
                ><?php if(!empty($message)) echo $message; ?> </textarea>
                <label for="query">Your query...</label>
              </div>

              <div class="mb-4 text-center">
                <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>