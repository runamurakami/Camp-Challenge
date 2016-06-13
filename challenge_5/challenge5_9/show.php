<?php
    require_once 'scriptUtil.php';
    require_once 'defineUtil.php';

    session_chk();

    $get_data = array();

    if(!empty($_GET['name'])){
        $get_data['name'] = $_GET['name'];
    }
    if(!empty($_GET['comment'])){
        $get_data['comment'] = $_GET['comment'];
    }
    //var_dump($get_data);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo SHOW ?></title>
</head>
<body>
    <h1>掲示板投稿結果</h1>
    <?php
    if(!isset($get_data['name']) || !isset($get_data['comment']) ){
        echo '入力データが不十分です]。もう一度入力を行ってください。';
    }else{
        echo $get_data['name'].'さんの投稿です。<br>';
        echo '本文は'.$get_data['comment'].'です。<br>';
    }
    ?>
</body>
</html>
