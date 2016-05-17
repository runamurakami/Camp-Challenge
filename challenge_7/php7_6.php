<?php
try{
    $pdo_object = new PDO('mysql:host = localhost;dbname = Challenge_db;charset = utf8','murakami','runrun22');
}catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->getMessage());
}
 $sql = "DELETE FROM profiles WHERE profilesID = :10";
 $query = $pdo_object->prepare($sql);
 $query -> execute();
 $result = $query->fetchall(PDO::FETCH_ASSOC);
 var_dump ($result);
?>
