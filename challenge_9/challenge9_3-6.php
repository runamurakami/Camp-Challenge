<?php
abstract class base{
 abstract protected function load();
 public static function show();

  class human extends base{
    private $Htable = '';

    function__construct($Htable){
      $this->name = $Htable;
    }
    function getName(){
      return $this->name;
    }
    function__destruct(){
      $this->name = '';
    }
    function load{
    try{
      $pdo_object = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','murakami','runrun22');
      $sql = "SELECT * FROM human";
      $Htable = $pdo_object->prepare($sql);
      $Htable->execute();
      $result = $Htable->fetchall(PDO::FETCH_ASSOC);
     }
     catch(PDOException $Exception){
      die('データ取得に失敗しました:'.$Exception->getMessage());
    }
  }

   function show{
     try{
       $pdo_object = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','murakami','runrun22');
       $sql = $pdo_object->query('SHOW TABLES');
       while($result = $sql->fetch(PDO::FETCH_ASSOC)){
         var_dump($result);
       }
      }
      catch(PDOException $Exception){
       die('データ取得に失敗しました:'.$Exception->getMessage());
     }
   }
 }

 class station extends base{
   private $Stable = '';

   function__construct($Stable){
     $this->name = $Stable;
   }
   function getName(){
     return $this->name
   }
   function__destruct(){
     $this->name = '';
   }
   function load{
    try{
        $pdo_object = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','murakami','runrun22');
        $sql = "SELECT * FROM station";
        $Stable = $pdo_object->prepare($sql);
        $Stable->execute();
        $result = $Stable->fetchall(PDO::FETCH_ASSOC);
      }catch(PDOException $Exception){
       die('データ取得に失敗しました:'.$Exception->getMessage());
       }
   }

   function show{
    try{
        $pdo_object = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','murakami','runrun22');
        $sql = $pdo_object->query('SHOW TABLES');
        while($result = $sql->fetch(PDO::FETCH_ASSOC));{
        var_dump($result);
        }
     }catch(PDOException $Exception){
      die('データ取得に失敗しました:'.$Exception->getMessage());
   }
  }
 }
  $human = new human();
  $station = new station();
}
 ?>
