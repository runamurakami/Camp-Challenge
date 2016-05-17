<?php
//エラーハンドリングを含んだ接続の確立
//try~catchで囲んでおくことで、その間のエラーを取得表示。
try{
    $pdo_object = new PDO('mysql:host = localhost;dbname = Challenge_db;charset = utf8','murakami','runrun22');
}catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->grtMessage());
}

 ?>
