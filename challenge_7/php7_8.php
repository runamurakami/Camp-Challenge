<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>検索フォーム</title>
  </head>
  <body>
    <form  class = "" action = "./php7_8.php" method = "post">
      <input type = "text" name = "search_key">
      <input type = "submit" name = "btnSubmit">
    </form>

    <?php

     try{
        $pdo_object = new PDO('mysql:host = localhost;dbname = Challenge_db;charset = utf8','murakami','runrun27');
     }catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->getMessage());
      }

       if(isset($_POST['search_key'])){
       //ポストされたデータを受け取ります。
        $search_key = '%'.$_POST['search_key'].'%';
        $sql = "SELECT*FROM profiles"."WHERE name LIKE'%[search_key]%' ";
        $query = $pdo_object->prepare($sql);
        $query -> execute();
        $result = $query->fetchall(PDO::FETCH_ASSOC);
        echo $result;
　     }else{
         echo "その名前は存在しません";
       }
   ?>
  </body>
</html>
