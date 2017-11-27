<?php
session_start();
if($_SESSION['yetki_id']==3){
   
     include '../lib/PDOconf.php';
    ?>
<form action="ilanbak.php" method="post" >
    <input type="text" name="ara" >
          <input type="submit" value="Submit">
    
    
</form>
        
        
        
        <?php
        echo '<br> <br><a href="http://op.ked.im/modul/ilanlistesi.php">çıkış</a>';
    if(isset($_POST['ara'])){
        $ara=$_POST['ara'];
        $sql25="SELECT * FROM ilan WHERE ilan LIKE '%$ara%'";
echo $sql25;
        echo "arama sonucunuz";
        foreach ($dbh->query($sql25) as $valt){
            echo $valt['ilan']."<br>";
            
            
            
        }
        
    }
    
    echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';
    
    
    
    
    
    
    
    
    
}else{
    echo "bu sayfaya giriş yetkiniz yok";
}
echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';