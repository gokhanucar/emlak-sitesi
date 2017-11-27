<?php
session_start();
include '../lib/PDOconf.php';
$kadi=$_POST['kadi'];
$sifre=$_POST['sifre'];

$sql1="SELECT * FROM kullanicilar WHERE k_adi='$kadi'";
$sorgu=$dbh->query($sql1);
if($sorgu->rowCount()>0){
foreach ($sorgu as $sorgu1){
  
    if($sorgu1['k_adi']==$kadi && $sorgu1['sifre']==$sifre ){
        
       $_SESSION['id']=$sorgu1['id'];
       $_SESSION['yetki_id']=$sorgu1['yetki_id'];
         header('Location: http://op.ked.im/modul/panel.php');
        
        
        
    }else{
        
        echo "sifre hatali";
        $_SESSION['mesaj']="sifre hatali";
          header('Location: http://op.ked.im');
    }
     
    
}}else{
        $_SESSION['mesaj']="bilgiler yanlis";

    header('Location: http://op.ked.im');
}