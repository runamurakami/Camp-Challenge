<?php
  function profile($name){
    $id1 = 1111;
    $name1 = '村上';
    $birth1 = '2000/1/1';
    $address1 = '姫路';
    $profile1 = array('ID'=>$id1,'名前'=>$name1,'生年月日'=>$birth1,'住所'=>$address1);

    $id2 = 2222;
    $name2 = '青木';
    $birth2 = '1996/6/6';
    $address2 = '神戸';
    $profile2 = array('ID'=>$id2,'名前'=>$name2,'生年月日'=>$birth2,'住所'=>$address2);

    $id3 = 3333;
    $name3 = '中田';
    $birth3 = '1999/7/7';
    $address3 = '明石';
    $profile3 = array('ID'=>$id3,'名前'=>$name3,'生年月日'=>$birth3,'住所'=>$address3);

    if(strstr($name1,$name)){
      return $profile1;
    }elseif(strstr($name2,$name)){
      return $profile2;
    }elseif(strstr($name3,$name)){
      return $profile3;
    }else{
      echo 'その名前の人はいません。';
    }
  }
  foreach(profile('青') as $key => $value){
    echo '[' . $key . ']' . $value . '<br>';
  }


 ?>
