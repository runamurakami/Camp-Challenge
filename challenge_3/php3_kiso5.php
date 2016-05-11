<?php
  function profiles(){
    $id = '1224';
    $name = '山田';
    $birth = '2000年1月1日';
    $address = '兵庫県神戸市西区';

    return array($id,$name,$birth,$address);
  }

   $result = profiles();

  foreach($result as $key => $value){
  echo "$value.<br />";
}
 ?>
