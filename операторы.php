Операция эквивалентности

==
===

$int1 = 11;
$string1 = "11";
if ($int1 == $string1) echo "переменные равные";

false
$zero1 = 0; // ноль
$tsss1 = ""; // пустая строка
if ($zero1 == $tsss1) echo "переменные равные";

===
!==

$zero1 = 0; // ноль
$tsss1 = ""; // пустая строка
if ($zero1 === $tsss1) echo "переменные равные";


Оператор <=>

cmp()
usort()



<?php
function cmp ($c, $b)
{
    if ($c == $b) return 0;
    if ($c < $b) return -1;
    if ($c > $b) return 1;
}
$arr = array(10, 20, 7, 50, 1, 4);
usort($arr, 'cmp');
print_r($arr); // 1, 4, 7, 10, 20, 50
?>





<?php
$arr = array(30, 1, 7, 5, 6, 8);
usort($arr, function($b, $c) { return $b <=> $c; });
print_r($arr); // 1, 5, 6, 7, 8, 30
?>



Логические операции

false
true

! c
c && b 
 c || b 
|
||

$logics = 0 && (time() > 99);

or
and


Особенности оператора @

display_errors 
log_errors
if (isset($_REQUEST['doGo1'])) echo "Вы нажали эту кнопку!";




Условные операции

Противопоказания к использованию(@ - собак(собачек) ) 

include
eval()
<?php
// Проверка, установлен ли элемент массива
if (@$_REQUEST["doGo1"]) echo "Кнопка нажата!";
// Разделение строки вида "ключ=значение" на пару переменных
@list ($key, $value) = explode("=", $string1);
// Открытие файла с последующей проверкой
$f = @fopen("password.txt") or die("Не удалось открыть такой файл!");
//?>



Условные операции



x ? y : z
 ? : 
<?php
$z = -15;
$z = $z < 0 ? -$z : $z;
echo $z; // 15


?>
if ($_REQUEST["doGo1"] ?: false) echo "Кнопка нажатая!";

if (isset($_REQUEST["doGo1"]) ?: false) echo "Кнопка нажатая!";


$val1 = isset($_REQUEST["doGo1"]) ? $_REQUEST["doGo1"] : false;

??

$val1 = $_REQUEST["doGo2"] ?? false;























































