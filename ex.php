<?php
  $a = NULL;
  $y = NULL;
  $z = 4;
  var_dump($a ?? $y ?? $z); // int(4)
?>
