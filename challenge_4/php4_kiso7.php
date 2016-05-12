<?php
//以下の文章の「i」→「い」に、「ｕ」→「う」に入れ替える。
//「きょｕはぴｉえｉちぴｉのくみこみかんすｕのがくしゅｕをしてｉます」
$subject ='「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」';
$table = array(
    'I' => 'い',
    'U' => 'う'
);

$search = array_keys( $table);
$replace = array_values( $table);

echo str_replace($search,$replace,$subject);

 ?>
