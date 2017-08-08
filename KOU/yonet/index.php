<?php
@include("../baglanti.php");
 
		session_start();
		if(!($_SESSION['id']))
		{
			header("Location:admin.php");
		}	
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf8" />
    <title>Admin Paneli</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="hold-transition skin-green sidebar-mini">
  <?php 
 
if(@$_GET["sil"])
{
	$sil_id=$_GET["sil"];
	$sil=mysql_query("DELETE FROM `duyurular` WHERE `DuyuruId`= '$sil_id'");
	}
?>
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
  <?php 
   	mysql_query("SET NAMES UTF8");
 
  include("menu.php");?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
           
                  <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Duyurular Kısmı İle İlgili İşlemler</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
					
                      <tr>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>Duyuru Tip</th>
                          <th>Eklenme Tarihi</th>
                           <th>Ekleyen</th>
                             <th>Ek</th>
                             <th>Web Link</th>
                        <th>Sil-Güncelle</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     
                  
					    	<?php
							mysql_query("SET NAMES UTF8");
							if($_SESSION['id']==2)//super admin bölüm başkanlığı
							{	$sorgu=mysql_query("SELECT d.DuyuruId,d.Baslik, d.Aciklama,d.DuyuruTipi,d.Tarih,k.AdSoyad,d.Ek,d.WebLink FROM duyurular d JOIN kullanici k ON k.KullaniciId=d.YayinlayanId");}
							else{
					$sorgu=mysql_query("SELECT d.DuyuruId,d.Baslik, d.Aciklama,d.DuyuruTipi,d.Tarih,k.AdSoyad,d.Ek,d.WebLink FROM duyurular d JOIN kullanici k ON k.KullaniciId=d.YayinlayanId where k.KullaniciId='$_SESSION[id]'");}
					while($dizi=mysql_fetch_array($sorgu))
					{?>
                    
  <tr><td><?php echo $dizi['Baslik'];?></td><td><?php echo $dizi['Aciklama'];?></td><td><?php echo $dizi['DuyuruTipi'];?></td><td><?php
  echo date("d.m.Y", strtotime($dizi["Tarih"])); ?></td><td><?php echo $dizi['AdSoyad'];?></td><td><?php echo $dizi['Ek'];?></td><td><a href="<?php echo $dizi['WebLink'];?>">Link</a></td> <td><a href="index.php?sil=<?php 
  echo $dizi['DuyuruId'];?>" class="button1"> Sil</a> / <a href="d_guncel.php?g_id=<?php echo $dizi['DuyuruId'];?>">Güncelle</a></td>
	 </tr> <?php
									}
								 ?>
                
            
					 
             
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th><a href="d_ekle.php">Ekle</a></th>
                        
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
