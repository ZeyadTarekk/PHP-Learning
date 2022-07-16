<?php
  $loggedIn = 0;
  $array = [1,2,3,4,5,6];
  if(!$loggedIn)
    echo "You are logged in <br>";
  else
    echo "You are not logged in <br>";
    echo ($loggedIn) ?  "You are logged in " :  "You are not logged in "; 
?>

<div>
  <?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
    <?php } else { ?>
      <h1>Welcome Guest</h1>
  <?php } ?>
</div>


<div>
  <?php if($loggedIn): ?>
    <h1>Welcome</h1>
  <?php else: ?>
  <h1>Welcome Guest</h1>
  <?php endif;?>
</div>

<div>
  <ol>
    <?php foreach($array as $val):?>
      <li> <?php echo "Hello".$val ?></li>
      <?php endforeach;?> 
  </ol>
</div>

<div>
  <ol>
    <?php for($i=0 ; $i< sizeof($array);$i++):?>
      <li> <?php echo "Hello".$i+ 1 ?></li>
      <?php endfor;?> 
  </ol>
</div>