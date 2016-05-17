<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>検索フォーム</title>
  </head>
  <body>
    <form  class = "" action = "./php7_10.php" method = "post">
      名前<input type = "text" name = ":name">
      年齢<input type = "text" name = ":age">
      生年月日<input type = "text" name = ":birthday">
      <input type = "submit" name = "btnSubmit" value = "検索">
    </form>

    <?php

     try{
        $pdo_object = new PDO('mysql:host = localhost;dbname = Challenge_db;charset = utf8','murakami','runrun22');
     }catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->getMessage());
    };

if(isset($_POST[':name']) == $name and $_POST[':age'] == $age and $_POST[':birthday'] == $birthday　){
         $sql= "UPDATE profiles SET name = :name,tell = :tell,age = :age,birthday = :birthday WHERE profilesID = :id";
         $query= $pdo_object -> prepare($sql);
         $query -> bindvalue('name',':name');
         $query -> bindvalue('age',':age');
         $query -> bindvalue('birthday',':birthday');
         $query -> execute();

        $result = $query -> fetchall(PDO::FETCH_ASSOC);
}
?>
</body>
</html>
