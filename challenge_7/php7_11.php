<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>検索フォーム</title>
  </head>
  <body>
    <form  class = "" action = "./php7_10.php" method = "post">
      profilsID<input type = "text" name = ":id">

      名前<input type = "text" name = ":name">
      電話<input type = "text" name = ":tell">
      年齢<input type = "text" name = ":age">
      生年月日<input type = "text" name = ":birthday">
      <input type = "submit" name = "btnSubmit" value = "上書き">
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
          $ID = $_POST['ID'];
          $name = $_POST['name'];
          $tell = $_POST['tell'];
          $age = $_POST['age'];
          $birthday = $_POST['birthday'];
         $sql= "UPDATE profiles SET name = :name,tell = :tell,age = :age,birthday = :birthday WHERE profilesID = :id";
         $query= $pdo_object -> prepare($sql);
         $query -> bindvalue('profilesID',':id');
         $query -> bindvalue('name',':name');
         $query -> bindvalue('tell',':tell');
         $query -> bindvalue('age',':age');
         $query -> bindvalue('birthday',':birthday');
         $query -> execute();
         echo '更新完了しました';
}
?>
</body>
</html>
