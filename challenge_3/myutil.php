<?php
function my_profile(){
     echo "私の名前は村上瑠菜です。<br />";
     echo "生年月日は1994年8月2日です。<br />";
     echo "よろしくお願いします。<br />";
}
function number($num){
  if($num%2 == 0){
    echo "偶数";
  }else{
    echo"奇数";
  }
}
number(30);
 ?>
