<?php
session_start(); ?>
<?php require_once '../common/defineUtil.php'; ?>
　<!--タスク4.セッションで値を保持するために-->
<?php $name = isset($_SESSION['name'])?$name=$_SESSION['name']:'';
      $year = isset($_SESSION['year'])?$_SESSION['year']:'';
      $month = isset($_SESSION['month'])?$_SESSION['month']:'';
      $day = isset($_SESSION['day'])?$_SESSION['day']:'';
      $type = isset($_SESSION['type'])?$_SESSION['type']:'';
      $tell = isset($_SESSION['tell'])?$_SESSION['tell']:'';
      $comment = isset($_SESSION['comment'])?$_SESSION['comment']:'';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
    <form action = "<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:       <!--タスク4.入力不完全で戻った時にsessionで値得る-->
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br><br>

    生年月日:　　　<!--タスク2.valueの"---"を表示させないため削除。-->
    <select name="year">
        <option value="">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"<?php if($i == $year){echo 'selected';}; ?>><?php echo $i ;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"<?php if($i == $month){echo 'selected';}; ?>><?php echo $i;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"<?php if($i == $day){echo 'selected';}; ?>><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <?php ($type == "エンジニア")?$val = "checked":$val = "";?>
    <input type="radio" name="type" value="エンジニア"<?echo $val?>>エンジニア<br>

    <?php ($type == "営業")?$val = "checked":$val = "";?>
    <input type="radio" name="type" value="営業"<?echo $val?>>営業<br>

    <?php ($type == "その他")?$val = "checked":$val = "";?>
    <input type="radio" name="type" value="その他"<?echo $val?>>その他<br>
    <br>

    電話番号:
    <input type="text" name="tell" value = "<?php echo $tell;?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $comment?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
</body>
</html>
