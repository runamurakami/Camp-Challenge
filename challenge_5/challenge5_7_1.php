<?php session_start();
$name = isset($_SESSION['name'])?$name=$_SESSION['name']:null;
$gender = isset($_SESSION['gender'])?$gender=$_SESSION['gender']:null;
$comment = isset($_SESSION['comment'])?$comment=$_SESSION['comment']:null;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>データ操作応用</title>
  </head>
  <body>
    <form action = "challenge5_7_2.php" method = "POST">
      <tr>
        <td align = "right"><b>名前</b></td><br>
        <td><input type = "text" name = "name" value="<?php echo $name; ?>"></td>
      </tr>
      <br><br>
      <tr>
        <td align = "right"><b>性別</b></td><br>
        <td>
          <?php ($gender == "男")?$val = "checked":$val = "";?>
          <input type = "radio" name = "gender" value = "男"<? echo $val?>>男
        <br>
          <?php ($gender == "女")?$val = "checked":$val = "";?>
          <input type = "radio" name = "gender" value = "女"<? echo $val?>>女
        </td>
      </tr>
      <br><br>
      <tr>
        <td align = "righit"><b>趣味</b></td><br>
        <td>
          <textarea name = "comment" cols = "50" rows = "3"><?php echo $comment; ?></textarea>
        </td>
      </tr>
      <tr>
        <td></td>
        <br>
        <td>
          <input type="submit" name="btnSubmit" value="確認画面へ">
        </td>
    </form>
  </body>
</html>
