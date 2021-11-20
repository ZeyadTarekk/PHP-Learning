<?php
  if(filter_has_var(INPUT_POST,'data')){
    echo "data found <br>";
  }
  else{
    echo "data not found <br>";
  }

  if(filter_has_var(INPUT_POST,'data')){

    $email = $_POST['data'];

    // Removes illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email . '<br>';

    // if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL))
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo "Email : validated";
    }
    else {
      echo "Email : not validated";
    }
  }

  // FILER_VALIDATE_BOOLEAN
  // FILER_VALIDATE_EMAIL
  // FILER_VALIDATE_FLOAT
  // FILER_VALIDATE_INT
  // FILER_VALIDATE_IP
  // FILER_VALIDATE_REGEXP
  // FILER_VALIDATE_URL

  // FILTER_SANITIZE_EMAIL
  // FILTER_SANITIZE_ENCODED
  // FILTER_SANITIZE_NUMBER_FLOAT
  // FILTER_SANITIZE_NUMBER_INT
  // FILTER_SANITIZE_SPECIAL_CHARS
  // FILTER_SANITIZE_STRING
  // FILTER_SANITIZE_URL
  $var = '23';

  if(filter_var($var,FILTER_VALIDATE_INT)){
    echo '<br>' . $var . ' is a number';
  } else {
    echo '<br>' . $var . ' is not a number';
  }

  $number = '21dsadw8dsad@@//2001';
  $number = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
  echo '<br>'. $number;

?>



<form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name ="data">
  <button type = "submit">Submit</button> 
</form>
