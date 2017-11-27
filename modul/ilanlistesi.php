<?php
session_start();
if($_SESSION['yetki_id']==3){
     include '../lib/PDOconf.php';
         foreach ($dbh->query("SELECT * FROM ilan ") as $valt){
            echo $valt['ilan']."<br>";
            
            
            
        }
}else{
    echo "bu sayfaya giriş yetkiniz yok";
}
echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';