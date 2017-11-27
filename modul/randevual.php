<?php
session_start();
include '../lib/PDOconf.php';
?>
<html lang="en"><head>  <meta charset="utf-8">   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> 
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>  
        <link rel="stylesheet" href="/resources/demos/style.css">  <script>  
            
    $(function() {    $( "#datepicker" ).datepicker();  });  </script>
        </head>
        <body>
            <form action="./randevuekle.php" method="POST">
            
            <p>Date: <input type="text" id="datepicker" name="tarih"></p> 
            <select name="send">
    <?php
$sql8="SELECT * FROM kullanicilar WHERE yetki_id=2";
if($_SESSION['yetki_id']==3){
    foreach ($dbh->query($sql8) as $valt){
?>



                <option value="<?php echo $valt['id'];?>"><?php echo $valt['k_adi'];?></option>
            

    <?php
   
    }?>   </select>          <input type="submit" value="Submit">
            
            </form>
         </body></html>
        <?php 
    
    
    
    
}else{
    echo "buraya girme yetkiniz yok";
    
}
        
      echo '<br> <br><a href="http://op.ked.im/logut.php">çıkış</a>';  ?>