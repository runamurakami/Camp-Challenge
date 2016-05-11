<?php
function my_profile(){
     echo "私の名前は村上瑠菜です。<br />";
     echo "生年月日は1994年8月2日です。<br />";
     echo "よろしくお願いします。<br />";
   return true;
}
 $profile = my_profile;
  if($profile == true){
    echo "この処理は正しく実行されました";
  }else{
    echo "この処理は正しく実行されませんでした";
  }
?>
