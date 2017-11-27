<?php

session_start();
$yetki=$_SESSION['yetki_id'];
$id=$_SESSION['id'];
function randevulistesi($id){
    include '../lib/PDOconf.php';
    $sql4="SELECT kullanicilar.k_adi ,randevu.tarih
FROM randevu
JOIN kullanicilar ON randevu.randevualan_id = kullanicilar.id WHERE randevu.randevuverem_id='$id'";
    
         
    $liste=$dbh->query($sql4);
    
    
    return $liste;
}

if($yetki==1){
    
   ?>
<!DOCTYPE html>
<html>
<body>

    <form action="./admin.php" method="post" >
 Kullanıcı adı <input type="text" name="kadi"><br>
  Şifre: <input type="text" name="sifre"><br>
        Yetki_id <input type="text" name="yetki"><br>
  <input type="submit" value="Submit">
</form>
    </body>
</html>





    <?php
}else if($yetki==2){
    ?>
<form action="./emlakf.php" method="POST">
ilan gönder:<br>
<input type="text" name="ilan" >
         </form>
<input type="submit" value="Submit">
    <br>
    <b>Randevu listesi</b>
    <br>
        <?php
    
    foreach (randevulistesi($id) as $rand){
        
        echo "kullanici adi :".$rand['k_adi']. " randevu tarihi : ". $rand['tarih'] ."<br>" ; 
    }        
        
}else if ($yetki==3) {
    ?>
    <a href =" http://op.ked.im/modul/ilanbak.php">ilanbak</a>
    <br>
    <a href="http://op.ked.im/modul/puanla.php">puanla</a>
    <br>
    <a href ="http://op.ked.im/modul/randevual.php">randevual</a>

        
        
        <?php
}else{
    echo "bu sayfaya giriş yetkiniz yok";
    
}


echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';
