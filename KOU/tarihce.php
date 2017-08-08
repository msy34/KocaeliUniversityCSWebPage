<!DOCTYPE html>
<html>
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kocaeli Üniversitesi Bilgisayar Mühendisliği Hakkımızda</title>
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
            <h3 class="duyuru-baslik">Tarihçe</h3>  
       	 
       <div class="icerik">
    <p> 1993 yılında Prof. Dr. Hüseyin KARABELLİ başkanlığında kurulan Bilgisayar Mühendisliği, 1994-95 yılında 27 öğrenciyle Eğitim-Öğretime başlamıştır. Öğretim süresi I. öğretim öğrencileri için 1 yıl hazırlıkla birlikte 5 yıl, II. Öğretim öğrencileri için 4 yıldır. </p><br>
<p>
Bölümümüz ilk mezunlarını 1997-1998 yılında vermiştir. 2000-2001 Eğitim-Öğretim yılında II. Öğretimin açılmasıyla öğrenci sayımız günümüz itibariyle 480'e ulaşmıştır. </p><br>
<p>
Daha öncesinde Vinsan yerleşkesinde eğitim faaliyetini sürdüren bölümümüz, 2009 Eylül ayından bu yana çağdaş anlayışla tasarlanmış 42.000 m² lik kapalı alana sahip Umuttepe Yerleşkesi'ndeki yeni ortamına kavuşmuştur. </p><br>

       </div>
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
