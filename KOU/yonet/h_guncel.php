<?php
ob_start();
session_start();
@include("../baglanti.php");
	 mysql_query("SET NAMES UTF8");
		if(!($_SESSION['id']))
		{
			header("Location:admin.php");
		}	
	
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Haber Güncelleme Sayfası</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-green sidebar-mini" onLoad="LoadValue();">
 
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
         <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>KOU</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>KOU </b>Yönetim Paneli</p></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
      
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
 <?php include("menu.php");?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
           
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Haber Güncelleme Sayfası</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
				  <?php
					$g_id=$_GET['g_id'];
					$sorgu =mysql_query("SELECT * FROM `haberler` WHERE HaberId='$g_id'");
				$dizi=mysql_fetch_array($sorgu);
					
  
 if(!empty($_POST["baslik"]) AND !empty($_POST["aciklama"]))
{
	$y_bas=$_POST["baslik"];
	$y_acik=$_POST["aciklama"]; 
	$y_weblink=$_POST["weblink"];
	$yeni_ad=$_POST["dosyayolu"];
	 $tarih = date("Ymdhis");
	
	if($_FILES["dosya"]["error"]==0 and isset($_FILES["dosya"]))
	{  
	if ($_FILES["dosya"]["size"]<32*1024*1024)
						{//Dosya boyutu 32Mb tan az olsun
									$dosya_adi=$_FILES["dosya"]["name"];
									//Dosyaya yeni bir isim oluşturuluyor
									$uret=array("as","rt","ty","yu","fg");
									$uzanti=substr($dosya_adi,-5,5);
									$sayi_tut=rand(1,10000);
									$yeni_ad="../Ekler/".$uret[rand(0,4)].$sayi_tut.$uzanti;
									
									//Dosya yeni adıyla dosyalar klasörüne kaydedilecek
									if (move_uploaded_file($_FILES["dosya"]["tmp_name"],$yeni_ad))
									{
										echo 'Dosya başarıyla yüklendi.';
										//Bilgiler veri tabanına kaydedilsin 
									 }
									 else
									 {
										echo 'Dosya Yüklenemedi!';
									 }
						}
						else	
						{			
						echo 'Dosya boyutu 32 Mb ı geçemez!';
						}			
	 
	}
	 
	 
	mysql_query("SET NAMES UTF8");
	$guncel=mysql_query("UPDATE `haberler` SET `HaberBaslik`='$y_bas',`HaberDetay`='$y_acik',`HaberResim`='$yeni_ad',`WebLink`='$y_weblink'  WHERE `HaberId`='$g_id'");
		 
								if ($ekle){
									echo 'Veritabanına kaydedildi.';header("Location:haber.php");
								}else{
									echo 'Kayıt sırasında hata oluştu!';		header("Location:haber.php");
								}
			


} ?>
				 <form method="POST" enctype='multipart/form-data' name="gunce" action="<?php $_SERVER['PHP_SELF']; ?>" >
                    <input class="form-control" name="baslik" value="<?php echo $dizi['HaberBaslik'];?>"  placeholder="Başlık"/>
                  </div>
                 
                  <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" name="aciklama"  placeholder="Açıklama" style="height: 300px">
                    <?php echo $dizi['HaberDetay'];?>
                    </textarea>
                    
                  </div>
                  
                <!-- <div class="form-group">
                <label>Eklenme Tarihi</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
               
              </div>
              Eklenme Tarihi Seçimi Sonradan iptal edilmiştir.
                -->
                 
                <div class="form-group">
                 <label>Web Link</label>
                 <input class="form-control" name="weblink"  value="<?php echo $dizi['WebLink'];?>"  placeholder="http://www.kocaeli.edu.tr"/>
                </div>
                <div class="form-group">
                <?php $dosyayolu=$dizi['HaberResim'];  ?>
                <input type="hidden" name="dosyayolu" value="<?php echo $dosyayolu; ?>">
                 
                
                <fieldset>
                <legend>Dosya Güncelle</legend>
               <label>Ekli Resim</label>
               <img src="<?php echo $dosyayolu;?>" width="75" height="75">
                    <p class="help-block">Değiştirmek için seçim yapınız (Max 32 MB):</p>   
                     <input type="file" name="dosya"/>
                       </fieldset> </div>
                 
                  </div>
				  
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-envelope-o"></i> Güncelle</button>
					
                  </div>
				  </form>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
   
       
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Page Script -->
    <script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>
<script type="text/javascript">
 
</script>
  </body>
</html>
