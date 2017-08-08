    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/1.jpg" width="75"  class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Hoşgeldiniz <br /><?php  
			 
			 
 
				mysql_query("SET NAMES UTF8_GENERAL_CI");
				echo $_SESSION["isim"];
				?><a href="cikis.php"><br />Çıkış</a> </p>
                
            </div>
          </div>
            
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Ara...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
       
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
                      <ul class="sidebar-menu">
            <li class="header">Düzenleme Menüsü</li>
         
      
            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-table"></i> <span>Duyuru İşlemleri</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
			  <li class="treeview">
              <a href="haber.php">
                <i class="fa fa-table"></i> <span>Haber İşlemleri</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>