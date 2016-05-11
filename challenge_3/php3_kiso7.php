<?php
$grobal_number=3;

 functionn check_serch(){
   static $local_number = 0;
   grobal $grobal_number;
   echo "ローカル"$local_number:"回".<br />;
   echo "グローバル"$grobal.<br />;
   $local_number+=1;
   $grobal_number*=2;
   for($local_number = 0,$localnumber >=20,1);
 }
 echo $grobal_number."<br />";
 ?>
