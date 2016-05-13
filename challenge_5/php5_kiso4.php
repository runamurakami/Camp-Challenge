
<?php
//３と同じ機能をセッションで作成
session_start();

if(isset($_SESSION['logintime'])){
  echo '前回の訪問日時は'.$_SESSION['logintime'].'です';
}
$_SESSION['logintime'] = date('Y年m月d日H時i分s秒');

?>
