<?php
  // echo'Test';
  $people = array("Zeyad" , "Mohamed", "Ahmed");
  
  $ids = array(23,21,9202588);
  
  $cars = ["Honda" , "Toyota", "BMW"];

  $cars[3] = "KIA";


  // $data = ["Zeyad" => 20, "ahmed" => 21 , 5 =>"Ahmed"];
  $data = array("Zeyad" => 20, "ahmed" => 21 , 5 =>"Ahmed");
  $ids = [ 22 =>"Zeyad", 42 => "Ahmed"];
  $data["Ibra"] = 354;
  // echo $data["Ibra"];
  // echo $ids[22];

  //echo $people[1];
  // echo $ids[2];
  // echo $cars[3];
  // print_r($cars);


  $newArray = array(
    array("Ahmed", "Mohamed", "Zeyad") ,
    array(32,23,45,78)
  );
  echo $newArray[0][2];
  echo count($data);

?>