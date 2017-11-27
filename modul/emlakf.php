<?php

session_start();

if($_SESSION['yetki_id']==2){
include '../lib/PDOconf.php';
$ilan=$_POST['ilan'];
$id=$_SESSION['id'];

    
    $date=date("d/m/Y");
   $sql3="INSERT INTO ilan (ilan,ilanveren_id,ilan_tarihi) VALUES ('$ilan', '$id','$date')"; 
    
    $dbh->query($sql3);
   echo "ilan başarıyla eklendi";
   echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';
}else{
    echo "yetkiniz yok";
}

