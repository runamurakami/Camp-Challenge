<?php
  $profile = array(
         $murakami = array('ID' => '1',
                           '名前' =>'村上',
                           '生年月日' => '1994/8/2',
                           '住所' => "姫路",
                          ),
         $yamada = array('ID' => '2',
                         '名前' => '山田',
                         '生年月日' => '2000/1/1',
                         '住所' => '神戸',
                        ),
         $aoki = array('ID' => '3',
                       '名前' => "青木",
                       '生年月日' => '1997/3/3',
                       '住所' => '明石',
                      )
                 );

    foreach($profile as $value1){
        if($value1 == $profile[2]){
          continue;
        }
      foreach($value1 as $key2 => $value2){
        if($key2 == 'ID' || $key2 == '住所'){
            continue;
          }
        echo '[' . $key2 . ']' . ':' . $value2 . '<br>';
      }
    }
 ?>
