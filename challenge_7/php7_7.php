<?php
try{
    $pdo_object = new PDO('mysql:host = localhost;dbname = Challenge_db;charset = utf8','murakami','runrun22');
}catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->getMessage());
}
 $sql = "UPDATE profiles
         SET
          name = '松岡 修造',
          age = 48,
          birthday = '1967-11-06'
         WHERE
          profilesID = :1";
 $query = $pdo_object->prepare($sql);
 $query -> execute();
 $result = $query->fetchall(PDO::FETCH_ASSOC);
 var_dump ($result);
?>
