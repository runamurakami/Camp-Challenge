<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/dbaccesUtil.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php
    // タスク5.error判定　conform.phpから来た人、直接リンクしてきた人を判別
    if (!((isset($_SESSION['mode']) && $_SESSION['mode'] == '1'))){
      echo "正しくありません";
    }
    else{
      $name = $_SESSION['name'];
      $birthday = $_SESSION['birthday'];
      $type = $_SESSION['type'];
      $tell = $_SESSION['tell'];
      $comment = $_SESSION['comment'];

      //db接続を確立
      $insert_db = connect2MySQL();

      //DBに全項目のある1レコードを登録するSQL
      $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
              . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

      //クエリとして用意
      $insert_query = $insert_db->prepare($insert_sql);

      //SQL文にセッションから受け取った値＆現在時をバインド
      $insert_query->bindValue(':name',$name);
      $insert_query->bindValue(':birthday',$birthday);
      $insert_query->bindValue(':tell',$tell);
      $insert_query->bindValue(':type',$type);
      $insert_query->bindValue(':comment',$comment);
      $insert_query->bindValue(':newDate',time("H時i分s秒")); //タスク6.タイムスタンプから現在時刻

      //SQLを実行
      $insert_query->execute();

      //接続オブジェクトを初期化することでDB接続を切断
      $insert_db=null;
      ?>

      <h1>登録結果画面</h1><br>
      名前:<?php echo $name;?><br>
      生年月日:<?php echo $birthday;?><br>
      種別:<?php echo $type?><br>
      電話番号:<?php echo $tell;?><br>
      自己紹介:<?php echo $comment;?><br>
      以上の内容で登録しました。<br>

      <?php echo return_top();
    }
  ?>
</body>

</html>
