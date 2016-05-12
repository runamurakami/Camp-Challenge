<?php
//ファイルから自己紹介を読み出し、表示。
 $fp = fopen('text01.txt','r');
 $file_txt = fgets($fp);
 //echo $file_txt;
 fclose($fp);

 $file_txt2 = file_get_contents('text01.txt');
echo $file_txt2;
 ?>
