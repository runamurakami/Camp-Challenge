<?php
try{
    $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','murakami','runrun22');
}catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->getMessage());
}
$sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday)VALUES(:profilesID,:name,:tell,:age,:birthday)";
$query = $pdo_object->prepare($sql);
$query ->bindValue(':profilesID',10);
$query ->bindValue(':name','佐藤 愛');
$query ->bindValue(':tell','070-3321-7765');
$query ->bindValue(':age',20);
$query ->bindValue(':birthday','1996-04-29');

$query->execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);
var_dump ($result);
 ?>
