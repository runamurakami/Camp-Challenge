<?php
//2016年11月4日10時0分0秒のタイムスランプを作成し、表示。
//「-年-月-日-時-分-秒」
$stamp = mktime(10,0,0,11,4,2016);
$today = date('Y年m月d日H時i分s秒');
echo $today;
 ?>
