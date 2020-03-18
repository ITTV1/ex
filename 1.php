<?php
//function cmp ($c, $b)
//{
//    if ($c == $b) return 0;
//    if ($c < $b) return -1;
//    if ($c > $b) return 1;
//}
//$arr = array(10, 20, 7, 50, 1, 4);
//usort($arr, 'cmp');
//print_r($arr); // 1, 4, 7, 10, 20, 50
//?>
<?php
$arr = array(30, 1, 7, 5, 6, 8);
usort($arr, function($b, $c) { return $b <=> $c; });
print_r($arr); // 1, 5, 6, 7, 8, 30
?>

