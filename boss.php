<form action="boss.php">
<input type="submit" name="doGo1" value="Кнопочка!">
</form>
<?php
// В массиве $_REQUEST всегда содержатся пришедшие из формы данные.
if (@$_REQUEST['doGo1']) echo "Вы нажали  точно кнопку эту!";
?>
