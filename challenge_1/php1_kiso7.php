<?php
  $total = $_get["total"];
  $num = $_get["num"];
  $item = $_get["item"];
//1.商品種別を表示
  $item1 = "雑貨";
  $item2 = "生鮮食品";
  $item3 = "その他";

  if($item == 1){
    echo $item1;
  }elseif($item == 2){
    echo $item2;
  }else($item == 3){
    echo $item3;
  }
//2.総額と個数から１つ当たりの値段を算出
  $price = $total / $num;
  echo $total."円".<br />;
  echo $price."円";
//3.購入に応じたポイント表示
  $point = 0
  if($total >= 5000){
    $point = $total * 0.05;
  }elseif($total >= 3000){
    $total * 0.04;
  }else(){
    $point == 0;
  }
  echo $point."ポイント";

 ?>
