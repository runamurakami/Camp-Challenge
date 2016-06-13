<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

     $post_name = isset($_POST['name'])?$_POST['name']:null;
     $post_gender = isset($_POST['gender'])?$_POST['gender']:null;
     $post_comment = isset($_POST['comment'])?$_POST['comment']:null;

     $_SESSION['name'] = $post_name;
     $_SESSION['gender'] = $post_gender;
     $_SESSION['comment'] = $post_comment;

    print "名前：";
    print $post_name;
    print"<BR><BR>";
    print "性別：";
    print $post_gender;
    print"<BR><BR>";
    print "趣味<BR>";
    print $post_comment;
    ?>
    <BR>
      <form action="challenge5_7_1.php" method="POST">
          <input type="submit" name="no" value="登録画面に戻る">
      </form>
  </body>
</html>
