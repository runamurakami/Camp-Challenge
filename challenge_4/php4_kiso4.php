<?php
//2015年1月1日0時0分0秒と2015年12月31日23時59分59秒の差（総秒）を表示。
$stamp1 = mktime(0,0,0,1,1,2015);
$stamp2 = mktime(23,59,59,12,31,2015);

$seconddiff = abs($stamp2 - $stamp1);

echo $seconddiff;

 ?>
