<?php
  for($i = 0 ; $i<10 ; $i++) {
    echo "Number: " . $i+1 . "<br>";
  }

  $i = 0 ;
  while($i <10) {
    echo "Number: " . $i+1 . "<br>";
    $i++;
  }


  $i = 0 ;
  do {
    echo "Number: ". $i+1 ."<br>";
    $i++;
  }
  while($i<10);

  $people = ["Zeyad" , "Tarek", "Ahmed" , "Mohamed" , "Sherif"];
  print_r($people);
  echo "<br>";
  foreach($people as $elem) {
    echo $elem . "<br>";
  }

  $peoplev2 = array("zeyad" => "zizo@gmaik.com" , "tarek" => "tarek@ossn.com", "Ahmed" => "ahmed@yahoo.com");
  foreach($peoplev2 as $elem2 => $email) {
    echo $elem2 ." " . $email . "<br>";
  }

?>