<?php @include("baglanti.php");
  
 setlocale(LC_TIME, "turkish"); 
 $tip=$_GET["tip"];
?>
<!DOCTYPE html>
<html>
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kocaeli Üniversitesi Bilgisayar Mühendisliği Detay</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link rel="shortcut icon" href="../favicon.ico">  
     		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
        <link rel="stylesheet" type="text/css" href="css/stil.css">
        <link rel="stylesheet" href="css/responsive-nav.css" />
        <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery-1.12.4.js"></script> <!-- /.modal --> 
<script src="js/modal.js"></script><!-- /.modal --> 
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script>
function toggle() {
 if (document.getElementById("nav-ul").style.display=="block"){
   document.getElementById("nav-ul").style.display=""
	document.getElementById("nav-toggle-alt").style.display="none"
  }
 else{
  document.getElementById("nav-ul").style.display="block";
  document.getElementById("nav-toggle-alt").style.display="block"
 }
}
</script>
 
</head>
<body>
 <div class="tepe">
    <div class="tepe-icerik">
    <div class="baslik">
<div class="logo"><a href="index.php"><img src="images/kou.png" width="75" height="75">  </a></div>  
<div class="yazi "><h1>Kocaeli Üniversitesi</h1><h2>Bilgisayar Mühendisliği</h2></div>
    </div>
    <div class="baslik-mobil">

<div class="logo"><a href="index.php"><img src="images/kou.png" width="75" height="75">  </a></div>    
<div class="yazi"><h1 class="buyuk">Kocaeli Üniversitesi</h1><h2 class="buyuk">Bilgisayar Mühendisliği</h2><h3 class="kucuk"><br>Kocaeli Üniversitesi</h3><h4 class="kucuk"><br>Bilgisayar Mühendisliği</h4></div>

    </div>
    <div class="menu"> 
       <?php include("menu.php");?>
    </div>
    </div>
</div>

<div class="konteynir">
	<div class="satir">
        <div class="sutundetay">
            <h3 class="duyuru-baslik">Bölüm Duyuruları </h3>  
       	 
          <?php
		  if($tip=="bolum")
		  {
						$sorgu=mysql_query("SELECT d.DuyuruId,d.Baslik, d.Aciklama,d.DuyuruTipi,d.Tarih,k.AdSoyad,d.Ek,d.WebLink FROM duyurular d JOIN kullanici k ON k.KullaniciId=d.YayinlayanId where d.DuyuruTipi='bolum' order by d.Tarih DESC ");
		  }
		  else if($tip=="genel")
		  {
			  $sorgu=mysql_query("SELECT d.DuyuruId,d.Baslik, d.Aciklama,d.DuyuruTipi,d.Tarih,k.AdSoyad,d.Ek,d.WebLink FROM duyurular d JOIN kullanici k ON k.KullaniciId=d.YayinlayanId where d.DuyuruTipi='genel' order by d.Tarih DESC");
			  }
		  else
		  {
			  $sorgu=mysql_query("SELECT h.HaberId,h.HaberBaslik, h.HaberDetay,h.Tarih,k.AdSoyad,h.HaberResim,h.WebLink FROM haberler h JOIN kullanici k ON k.KullaniciId=h.YayinlayanId order by h.Tarih DESC");
			  }
						$sayac=0;
						while($dizi=mysql_fetch_array($sorgu))
						{
							if(($sayac%2)==0){ echo "<div class=\"duyuru\" id=\"cift\">";}
							else{echo "<div class=\"duyuru\" id=\"tek\">";}
							
						 ?>
     
<div class="tarih">
 
         		<div class="calendarDate">	<em><?php $date_string = iconv('latin5','utf-8',strftime('%B', strtotime($dizi["Tarih"]))); echo $date_string  ?></em>
		<strong><?php $date_string = iconv('latin5','utf-8',strftime('%Y', strtotime($dizi["Tarih"]))); echo $date_string  ?></strong>
		<span><?php $date_string = iconv('latin5','utf-8',strftime('%d', strtotime($dizi["Tarih"]))); echo $date_string  ?></span>
		    </div>
        	</div> 
            <?php
			if($tip=="bolum" or $tip=="genel"){?>
            <a class="duyuru-link"  href="#" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $dizi['DuyuruId']; ?>" data-tip="10" id="getUser" ><h4><?php echo $dizi["Baslik"];?></h4></a>
            <?php }
            else if($tip=="haber")
     		{?>
             <a class="duyuru-link"  href="#" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $dizi['HaberId']; ?>" data-tip="20" id="getUser" ><h4><?php echo $dizi["HaberBaslik"];?></h4></a> <?php }?>
       <h5><?php echo $dizi["AdSoyad"]; $sayac =$sayac+1; ?></h5>
        </div><?php } ?> 
       
        </div>
	</div>
        
        </div>
        </div>
        </div>	 
     <div class="footer">
    <div class="foto">
    <img src="images/kou.png" width="100" height="100"></div>
<div class="paragraf">
   						  <h3>Kocaeli Üniversitesi Bilgisayar Mühendisliği</h3>
                          <h4>Yazılım Laboratuarı Proje 1</h4>
                          <h5>Mehmet Samet YILDIZ </h5>
                             <h5>Cihan SAVAŞ  Cihat DUYKU</h5></div>
                 
</div>
        
        <!--dsadsadsadsad-->
   <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
             <div class="modal-dialog"> 
                  <div class="modal-content"> 
                  
                       
                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>
                             
                     
                        
                 </div> 
              </div>
       </div><!-- /.modal -->    
   
   
   

        <script> 
$(document).ready(function(){
	
	$(document).on('click', '#getUser', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		var tip=$(this).data('tip');
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'getuser.php',
			type: 'POST',
			 data: { id: uid, tur: tip},
			 
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('Bir aksilik var...');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
  
        
 
 
	 
 </body>
</html>
