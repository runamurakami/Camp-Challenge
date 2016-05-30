<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
session_start();//再入力時用
$id = isset($_POST['id'])?$_POST['id']:null; //存在判定
//$birthday = $_POST['birthday'];
//$birthday = isset($_POST['birthday'])?$_POST['birthday']:null;

//var_dump($birthday);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>変更入力画面</title>
</head>
<body>
 <?php
 if(!$_POST['mode']=="RESULT"){
      echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
 }else{
  ?>
    <form action="<?php echo UPDATE_RESULT ?>" method="POST">
    <?php

    $result = profile_detail($_POST['id']);

    //$birthday = $result[0]['birthday'];
    // 取得した生年月日の値をbirth関数に渡し、配列にする
    $birthday = birth($result[0]['birthday']);
    // $birthday[0] = year
    // $birthday[1] = month
    // $birthday[2] = day
    ?>
    名前:
    <input type="text" name="name" value="<?php echo $result[0]['name']; ?>">
    <br><br>

    生年月日:　
    <select name="year">
        <option value="">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>" <?php if($i == $birthday[0]){ echo "selected";}?>><?php echo $i ;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>" <?php if($i == $birthday[1]){ echo "selected";}?>><?php echo $i ;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i;?>" <?php if($i == $birthday[2]){ echo "selected";}?>><?php echo $i ;?></option>

        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <?php
    for($i = 1; $i<=3; $i++){ ?>
    <input type="radio" name="type" value="<?php echo $i; ?>"<?php if($i==$result[0]['type']){echo "checked";}?>><?php echo ex_typenum($i);?><br>
    <?php } ?>
    <br>

    電話番号:
    <input type="text" name="tell" value="<?php echo $result[0]['tell']; ?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $result[0]['comment']; ?></textarea><br><br>

    <input type="hidden" name="mode"  value="RESULT">
    <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">
    <input type="hidden" name="id" value=<?php echo $id; ?>>
    </form>
    <form action="<?php echo RESULT_DETAIL; ?>" method="POST">
      <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
    </form>
    <?php
  }   
    echo return_top(); ?>
</body>

</html>
