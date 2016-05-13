<?php
//クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示
$access_time = date("Y年m月d日H時i分s秒");

setcookie('LastLoginDate',$access_time);

$lastDate = $_COOKIE['LastLoginDate'];


echo '前回のログイン日は、'.$lastDate.'です！';

 ?>
