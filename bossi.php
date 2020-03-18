<?php ## Сравнение объектов.
  class Bossprog {}
  $html = new Bossprog();
  $css = new Bossprog();
  if ($html == $css)  echo "Объекты равные ";
  if ($html === $css) echo "Объекты эквивалентные.";
?>
