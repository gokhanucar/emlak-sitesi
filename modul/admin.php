<?php
session_start();
include '../lib/PDOconf.php';
if($_SESSION['yetki_id']==1){
 $kadi=$_POST['kadi'] ;  
    $sifre=$_POST['sifre'];
    $yetki=$_POST['yetki'];
    $sql2="INSERT INTO kullanicilar(k_adi,sifre,yetki_id) VALUES ('$kadi','$sifre','$yetki')";
    $dbh->query($sql2);
    
      header('Location : http://op.ked.im/modul/panel.php');
echo"basari ile eklendi";
    
    
    
    
    
    
    
    
    
    
    
    
}else{
    echo "bu sayfaya giriş yetkiniz yok";
    
}