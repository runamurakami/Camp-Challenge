<!-- //以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述
//名前（テキストボックス）・性別（ラジオボタン）・趣味（複数行テキストボックス） -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>データ操作</title>
  </head>
  <body>
    <form action="php5_kiso2.php" method="post">
      <p>名前<br>
      <input type="text" name="txtName">
      </p>
      <p>性別<br>
      男<input type="radio" name="rdoGender" value="男">
      女<input type="radio" name="rdoGender" value="女">
      </p>
      <p>趣味<br>
      <textarea name="mulText"></textarea>
      </p>
      <p><input type="submit" name="btnSubmit"></p>
    </form>

  </body>
</html>
