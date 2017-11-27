<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['yetki_id'])){
    echo "asd";
    header('Location: http://op.ked.im/modul/panel.php');
    
    
}else{

?>
<!DOCTYPE html>
<html>
<body>

    <form action="./modul/login.php" method="post" >
  kullanici adi: <input type="text" name="kadi"><br>
  Şifre: <input type="text" name="sifre"><br>
  <input type="submit" value="Submit">
</form>
<?php
echo $_SESSION['mesaj'];

?>


</body>
</html>
<?php
}

?>