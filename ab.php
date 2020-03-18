<?php 
  $boss = array("реальность такая", true);
  $reality = array("реальность такая", "иллюзорная");
  if ($boss == $reality)  echo "Два массива равные";
  if ($boss === $reality) echo "Два массива эквивалентные";
?>
