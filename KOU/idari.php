<!DOCTYPE html>
<html>
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kocaeli Üniversitesi Bilgisayar Mühendisliği Hakkımızda</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link rel="shortcut icon" href="../favicon.ico">  
          <link rel="stylesheet" href="css/icerik.css">
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
            <h3 class="duyuru-baslik">Bilgisayar Mühendisliği Öğretim Elemanları
 </h3>  
       	 
       <div class="icerik">
       <br>
   
	  <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">Bölüm Sekreteri Resul ÖZKAN</div>
            <div class="panel-body">
              <div class="col-md-4"> <img class="img-responsive" src="img/kadro/ResulOzkan.jpg" alt=""/> </div>
              <div class="col-md-4">
                <ol class="personelBilgi">
                  <li><a href="http://www.gezginresul.com" class="btn btn-success btn-large">Kişisel Web Sitesi</a></li>

                  <li><span class="inf">E-posta: <a href="mailto:bilgisayar@kocaeli.edu.tr">bilgisayar@kocaeli.edu.tr</a></li>
                  <li><span class="inf">Oda No:</span> 3003</li>
                  <li><span class="inf">Telefon:</span> 303 3560
                  </li>
                </ol>
              </div>
              <div class="col-md-4">
                <ol class="personelBilgi">
                  <li><div class="inf">Araştırma Alanları:</div><br>  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        </div>
	
	
		
 
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
