<?php
    require_once 'scriptUtil.php';
    require_once 'defineUtil.php';

    session_chk();

    if(!isset($_COOKIE['login_count']) && !isset($_COOKIE['last_login'])){
        $lcount = 1;
        $llogin = time();
        setcookie('login_count',$lcount);
        setcookie('last_login',$llogin);
        setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
    }else if($_COOKIE['PHPSESSID']!=$_COOKIE['SAVEDPHPSESSID']){
        setcookie('login_count',$_COOKIE['login_count']+1);
        $lcount = $_COOKIE['login_count'];
        $llogin = $_COOKIE['last_login'];
        setcookie('last_login',time());
        setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
    }else{
        $lcount = $_COOKIE['login_count'];
        $llogin = $_COOKIE['last_login'];
    }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo INPUT ?></title>
</head>
<body>
    <h1>掲示板サービストップ</h1>
    今回で<?php echo $lcount ?>回目のアクセスです！　最終ログイン日時 <?php echo date('Y年m月d日 H時i分s秒',$llogin)?> <br>

    投稿したい内容
    <form action="<?php echo SHOW ?>" method="GET">
        名前:
        <input type="text" name="name" value="">
        <br><br>

        本文:　
        <input type="text" name="comment" value="">
        <br><br>

        <input type="submit" name="btnSubmit" value="投稿する">
    </form>
    <br><br>
</body>
</html>
