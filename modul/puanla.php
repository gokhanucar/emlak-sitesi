<?php
session_start();
if($_SESSION['yetki_id']==3){
    
   $id= $_SESSION['id'];
    include '../lib/PDOconf.php';
    $sql6="  SELECT kullanicilar.k_adi ,randevu.tarih,randevu.randevuverem_id
FROM randevu
JOIN kullanicilar ON randevu.randevualan_id = kullanicilar.id WHERE randevu.randevualan_id='$id'";
    foreach ($dbh->query($sql6) as $value) {
        if($value['tarih']<date("d/m/Y")){
        echo "görüşme tarihi :".$value['tarih'] ;
        
        $_SESSION['verem']=$value['randevuverem_id'];


?>
<form action="puanpost.php" method="post">
  puanla:
  <input type="range" name="puan" min="0" max="5">
      
  <input type="submit" value="puanla">
      </form>
</form>
<br>
    
    
    
    <?php        

        }
    }
    
    
    
    
    
    
    
    
    
    
    
}else{
    echo "bu sayfaya giriş yetkiniz yok";
}
echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';