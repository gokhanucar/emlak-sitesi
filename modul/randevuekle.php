<?php
session_start();

include '../lib/PDOconf.php';

 $randevualinan=$_POST['send'];
#echo $tarih;

if($_SESSION['yetki_id']==3){
$tarih=$_POST['tarih'];
$randevualinan;
$id=$_SESSION['id'];
$sql15="INSERT INTO randevu (randevualan_id,randevuverem_id,tarih) VALUES ('$id', ' $randevualinan','$tarih')";
echo $sql15;
$dbh->query($sql15);

echo "Randevunuz başarı ile kaydedilmiştir.";


}else{
    
    echo "buraya giriş hakkınız yok ";
}

echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';