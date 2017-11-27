<?php
include '../lib/PDOconf.php';
$sql1="SELECT * FROM kullanicilar WHERE k_adi='est'";
$sorgu1=$dbh->query($sql1);
if($sorgu1->rowCount()>0){
    
    print_r($sorgu1);
    echo "asd";
}else{
    echo "yanlis";
}
