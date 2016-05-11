<?php
  function calc($num1,$num2){
    $number = $num1*$num2;
    if($num2 == 5){
       echo $number;
    }else{
      echo $number * $number;
    }
  }
  calc(4,1);
