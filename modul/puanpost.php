<?php
session_start();
include '../lib/PDOconf.php';
if($_SESSION['yetki_id']==3){
    
$puan=$_POST['puan'];
if(isset($puan)){
    
   $verem=  $_SESSION['verem'] ;
   $id= $_SESSION['id'];
  $sql7="INSERT INTO puan (puan,puanalan_id,puanveren_id) VALUES ('$puan','$verem','$id')";
  
  
  $dbh->query($sql7);
    
    
    echo "ekleme başarılı";
    
}}else{
    echo "bu sayfaya giriş yetkiniz yok";
    
    
}

