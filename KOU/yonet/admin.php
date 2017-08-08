<?php 
session_start();
	 
		
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>KOU Bilgisayar Mühendisliği Admin Giriş</title>
   
        <link rel="stylesheet" href="css/style.css">
 
  </head>

  <body>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Giriş</h1>
  </div>
  <div class="login-form">
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <h3>Kullanıcı Adı:</h3>
    <input type="text" placeholder="Kullanıcı Adı" name="txt1"/><br>
    <h3>Parola:</h3>
    <input type="password" placeholder="Parola" name="txt2"/>
    <br>
    <input type="submit" value="Giriş" class="login-button" name="btn"/>
    </form>
  <br> <br>
  </div>
</div>

<?php 

@$btn= $_POST['btn'];
if($btn)
{
@include("../baglanti.php");
$ad= $_POST['txt1'];
$parola=$_POST['txt2'];

$sorgu=mysql_query("Select * from kullanici where KullaniciAdi='$ad' and Parola='$parola'");
$dizi=mysql_fetch_array($sorgu);
 
if($dizi)
{
	session_start();
	mysql_query("SET NAMES UTF8");
	$_SESSION["id"]=$dizi["KullaniciId"];
	$_SESSION["isim"]=$dizi["AdSoyad"];
 	header("location:index.php");
}
else{
	echo "Yanlış Kullanıcı Adı veya Şifre girişi";
	}
}
?>
 
 
 
 
  
    
    
  </body>
</html>
