<?php
		 
	@include("baglanti.php");
	
	if (isset($_REQUEST['id']) and isset($_REQUEST['tur']))
	 {
			$tur=$_REQUEST['tur'];
			if($tur==10)
			{
				 $sorgu=mysql_query("SELECT * FROM duyurular where DuyuruId='$_REQUEST[id]' ");
				 $dizi=mysql_fetch_array($sorgu);
				 $baslik=$dizi["Baslik"];
				 $aciklama=$dizi["Aciklama"];
				 $ek=$dizi["Ek"];
				 $web=$dizi["WebLink"];
				 $tarih=$dizi["Tarih"];
	   }
	    
	 if($tur==20)
	{
		$sorgu=mysql_query("SELECT * FROM haberler where HaberId='$_REQUEST[id]'");
		 $dizi=mysql_fetch_array($sorgu);
				 $baslik=$dizi["HaberBaslik"];
				 $aciklama=$dizi["HaberDetay"];
				 $ek=$dizi["HaberResim"];
				 $web=$dizi["WebLink"];
				 $tarih=$dizi["Tarih"];
		}
		
		 ?>
       					 <div class="modal-header" style="background-color:#5cb85c; height:120px;"> 
                          
                            <div style="float:left;"><img src="images/kou.png" width="100" height="100"></div><div style="height:70px; padding-top:10px;     text-align:center;">   <h1 class="modal-title" style="height:70px; color:#FFF;"  >
                            	<?php echo $baslik; ?>
                            </h1></div> 
                         
                       </div> 
                       <div class="modal-body"  style="min-height:300px;"> 
                       
                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="ajax-loader.gif">
                       	   </div>

            <?php 
			if($tur==20)
			{
				?>
                <img style="display:inline-block;" src="yonet/<?php echo $ek;?>" width="300" height="200" />
			  
			<?php
			}
			?>
			   <div style="display:inline-block; vertical-align:top;">
			<p ><i> <?php echo $aciklama; ?> </i></p></div>
		 
                          
                             
                        </div> 
                        <div class="modal-footer" style="background-color:#5cb85c"> 
                        <a   style="float:left; color:#FFF"href="<?php
						  if(empty($ek))
						  
						   {echo "#";}
						   else
						   {
							   echo "yonet/".$ek;
							   } 
						   
						   
						   ?>"><h4>Ek Dosya</h4></a>
                           <a style="float:left;">&nbsp;&nbsp;&nbsp;</a>
                          <a   style="float:left; color:#FFF"href="<?php
						  if(empty($web))
						  
						   {echo "#";}
						   else
						   {
							   echo $web;
							   } 
						   
						   
						   ?>">
                        
                           <h4>Web Link</h4></a>
                           
                              <a href="#" style="color:#FFF" class="btn btn-default" data-dismiss="modal"><h4>Kapat</h4></a> 
                        </div>
<?php }?>