<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>更新結果画面</title>
</head>
<body>
    <?php
    //入力画面から「確認画面へ」ボタンを押した場合のみ処理を行う
    if(!$_POST['mode']=="RESULT"){
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
    }else{
        //ポストの存在チェックとセッションに値を格納しつつ、連想配列にポストされた値を格納
                                //$id => bind_p2s('id'),
                                //$name => bind_p2s('name'),
                                //$birthday => bind_p2s('birthday'),
                                //$type => bind_p2s('type'),
                                //$tell => bind_p2s('tell'),
                                //$comment => bind_p2s('comment'));

        $result = update_profile($id,$name,$birthday,$tell,$type,$comment,$date);
        //エラーが発生しなければ表示を行う
        if(!isset($result)){
        //1つでも未入力項目があったら表示しない
            ?>
            <h1>更新確認画面</h1><br>
            名前:<?php echo $name;?><br>
            生年月日:<?php echo $birthday;?><br>
            種別:<?php echo ex_typenum($type);?><br>
            電話番号:<?php echo $tell;?><br>
            自己紹介:<?php echo $comment;?><br><br>

            <h1>更新確認</h1>
            以上の内容で更新しました。<br>

            <form action="<?php echo UPDATE_RESULT ?>" method="POST">
                <input type="hidden" name="mode" value="RESULT" >
                <input type="submit" name="yes" value="はい">
            </form>
            <?php
        }else{
            ?>
            <h1>入力項目が不完全です</h1><br>
            再度入力を行ってください<br>
            <h3>不完全な項目</h3>
            <?php
            //連想配列内の未入力項目を検出して表示
            foreach ($result as $key => $value){
                if($value == null){
                    if($key == 'name'){
                        echo '名前';
                    }
                    if($key == 'birthday'){
                        echo '生年月日';
                    }
                    if($key == 'type'){
                        echo '種別';
                    }
                    if($key == 'tell'){
                        echo '電話番号';
                    }
                    if($key == 'comment'){
                        echo '自己紹介';
                    }
                    echo 'が未記入です<br>';
                }
            }
        ?>
        <form action="<?php echo UPDATE ?>" method="POST">
            <input type="hidden" name="mode" value="UPDATE" >
            <input type="submit" name="no" value="更新画面に戻る">
        </form>
    <?php
    }else{
        echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top();
    ?>
</body>
</html>
