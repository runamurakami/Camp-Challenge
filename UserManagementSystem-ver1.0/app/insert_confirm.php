<?php require_once '../common/defineUtil.php'; ?>
<?php require_once '../common/scriptUtil.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php　　　　//タスク4の生年月日の値を保持するため、month・dayを追加
    if(!empty($_POST['name']) && !empty($_POST['year']) && !empty($_POST['month'])&& !empty($_POST['day'])&& !empty($_POST['type'])
            && !empty($_POST['tell']) && !empty($_POST['comment'])){

        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];

        //セッション情報に格納
　　　　 //year・month・dayを追加
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['year'] = $_POST['year'];
        $_SESSION['month'] = $_POST['month'];
        $_SESSION['day'] = $_POST['day'];
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;

        //タスク5.hiddenじゃないけど。順に来た人にのみセッション変数をもたせてresult.phpいく。
        $_SESSION['mode'] = '1';
?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="submit" name="yes" value="はい" />
        </form>
        <!--<form action="<?php echo INSERT_RESULT ?>" method="POST">
          <!いろんな要素を書く
          //エラー判定用
        </form>-->
        <form action="<?php echo INSERT ?>" method="POST">
          <input type="submit" name="no" value="登録画面に戻る">
        </form>

    <?php }else{ //タスク3.入力項目が不完全であった場合の処理
            if($_POST['name'] == null){
              $errormsg['Nmessage'] = "名前を入力してください。";
            }else{
              $_SESSION['name'] = $_POST['name'];
            }
            if($_POST['year'] == null){
              $errormsg['Ymessage'] = "生年月日を選択してください。";
            }else{
              $_SESSION['year'] = $_POST['year'];
            }
            if($_POST['type'] == null){
              $errormsg['Tmessage'] = "種別を選択してください。";
            }else{
              $_SESSION['type'] = $_POST['type'];
            }
            if($_POST['tell'] == null){
              $errormsg['Pmessage'] = "電話番号を入力してください。";
            }else{
              $_SESSION['tell'] = $_POST['tell'];
            }
            if($_POST['comment'] == null){
              $errormsg['Cmessage'] = "自己紹介を入力してください。";
            }else{
              $_SESSION['comment'] = $_POST['comment'];
            }
       ?>
        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください　<!--エラーメッセージ表示-->
        <div><?php $n = isset($errormsg['Nmessage']) ?$errormsg['Nmessage']:'';
                    echo $n;?></div>
        <div><?php $y = isset($errormsg['Ymessage']) ?$errormsg['Ymessage']:'';
                    echo $y;?></div>
        <div><?php $t = isset($errormsg['Tmessage']) ?$errormsg['Tmessage']:'';
                    echo $t;?></div>
        <div><?php $p = isset($errormsg['Pmessage']) ?$errormsg['Pmessage']:'';
                    echo $p;?></div>
        <div><?php $c = isset($errormsg['Cmessage']) ?$errormsg['Cmessage']:'';
                    echo $c;?></div>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
    <?php  echo return_top(); ?>  <!-- タスク1.登録確認画面と不完全画面両方でトップに戻る-->

</body>
</html>
