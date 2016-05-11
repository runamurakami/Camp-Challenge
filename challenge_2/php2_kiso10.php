<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
</head>
<body>

  <?php
    $atai = $_GET['num'];
    $n = $atai;
    //何乗のところ初期化する。
    $sosu2 = $sosu3 = $sosu5 = $sosu7 = $sonota = 0;
    $time2 = $time3 = $time5 = $time7 = 0;
    while($n % 2 == 0){ //まずｎを2で割れるとこまで割る。
       $n = $n / 2;
       $time2++;
     }
    while($n % 3 == 0){ //2で割れんかったら3で行けるとこまで行く。
       $n = $n / 3;
       $time3++;
    }
    while($n % 5 == 0){ //3同様。
       $n = $n / 5;
       $time5++;
     }
    while($n % 7 == 0){ //3同様。
       $n = $n / 7;
       $time7++;
    }

    if($n == 1){ //もし余りが1なら何も表示しない。
      $sonota ="";
    }else{      //1でもなかったらその他を表示する。
      $sonota ="その他";
    }

    if($time2 >= 1){
      echo '2の素因数'.$time2.'個'.'<br>';
    }
    if($time3 >= 1){
      echo '3の素因数'.$time3.'個'.'<br>';
    }
    if($time5 >=1){
      echo '5の素因数'.$time5.'個'.'<br>';
    }
    if($time7 >= 1){
      echo '7の素因数'.$time7.'個'.'<br>';
    }




  echo '<p>'.'2'.'<sup>'.$time2.'</sup>'.'3'.'<sup>'.$time3.'</sup>'.'5'.'<sup>'.$time5.'</sup>'.'7'.'<sup>'.$time7.'</sup>'.$sonota.'</p>';
?>
</body>
</html>
