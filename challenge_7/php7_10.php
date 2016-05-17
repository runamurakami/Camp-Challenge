<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>検索フォーム</title>
  </head>
  <body>
    <form  class = "" action = "./php7_10.php" method = "post">
      profilsID<input type = "text" name = ":id">

      <!--名前<input type = "text" name = ":name">
      電話<input type = "text" name = ":tell">
      年齢<input type = "text" name = ":age">
      生年月日<input type = "text" name = ":birthday">-->
      <input type = "submit" name = "btnSubmit">
    </form>

    <?php

     try{
        $pdo_object = new PDO('mysql:host = localhost;dbname = Challenge_db;charset = utf8','murakami','runrun22');
     }catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->getMessage());
    };

if(!isset($_POST[':id'])){
   echo 'IDがありません';
 } else{
         $sql= "DELETE FROM profiles WHERE profilesID = :id";
         $query= $pdo_object -> prepare($sql);
         $query -> bindvalue('profilesID',':id');
         $query -> execute();
         echo '削除完了しました';
}
?>
</body>
</html>
