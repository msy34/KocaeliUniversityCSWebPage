<?php 
session_start();
		if(@$_SESSION['oturum'])
		{
			header("Location:index.php");
		}
		
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Responsive Login Form</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
    
  </head>

  <body>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
  <form action="admin.php" method="post">
    <h3>Kullanıcı Adı:</h3>
    <input type="text" placeholder="Username" name="txt1"/><br>
    <h3>Parola:</h3>
    <input type="password" placeholder="Password" name="txt2"/>
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
@include("..\baglanti.php");
$ad=strip_tags(mysql_real_escape_string($_POST['txt1']));
$parola=strip_tags(mysql_real_escape_string($_POST['txt2']));
if($ad == "admin" && $parola=="12345")
{
 		session_start();
		$_SESSION['oturum']= $ad;
		header("Location:index.php");
 
}
else
{
	?>
    <div class="error-page">
  <div class="try-again">Hatalı Giriş Tekrar Deneyin</div>
</div><?php
	
	}
}
?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>
