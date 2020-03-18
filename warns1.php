<!-- Навязчивые предупреждения -->
<form action="warns1.php">
<input type="submit" name="doGo1" value="Кнопка!">
</form>
<?php
  // В массиве $_REQUEST всегда содержатся пришедшие из формы данные.
//  if ($_REQUEST['doGo1']) echo "Вы нажали эту кнопку!";
if (isset($_REQUEST['doGo1'])) echo "Вы нажали эту кнопку!"
?>
