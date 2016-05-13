
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     //５で作成したプログラムに、ファイルの中身を読み込んで表示する機能を追加
     var_dump($_FILES);
     $file_name = "text01.txt";
     move_upload_file($_FILES["userfile"]["tmp_name"],$file_name);

      ?>
   </body>
 </html>
