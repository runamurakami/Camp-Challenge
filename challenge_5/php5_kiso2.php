
//以下の機能を実装
//１で作成したHTMLの入力データを取得し、画面に表示

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo $_POST['txtName'];
      echo $_POST['rdoGender'];
      echo $_POST['mulText'];

     ?>
  </body>
</html>
