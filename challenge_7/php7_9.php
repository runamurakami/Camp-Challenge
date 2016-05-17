<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信フォーム</title>
  </head>{}
  <body>
    <form method  "post" action = "php7_9.php">
    <input type ="text" name = "Txname">
    <input type = "submit" name = "Btnsubmit">
  </form>
  </body>
</html>
<?php


try{

    $data = getdata();
    $stt = $data->prepare('INSERT INTO FORM(name)VALUES(:name)');
      $stt -> bindValue(':name',$_POST['name']);

      $stt -> execute();
      $data = NULL;
}catch(PDOException $Exception){
   die('接続に失敗しました:'.$Exception->getMessage());
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>OK</title>
   </head>
   <body>

   </body>
 </html>
