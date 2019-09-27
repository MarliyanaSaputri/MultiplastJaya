<?php
include 'koneksi.php';


?> <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="dist/img/avatar3.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <i class="fa fa-user"></i>
           <?php echo $_SESSION['username'];?> 
        
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     
 
 <ul class="sidebar-menu" data-widget="tree">
 <li class="header">MAIN NAVIGATION</li>
      
  <li>
          <a href="?page=home">
            <i class="fa fa-desktop"></i> <span>Home</span>
            <span class="pull-right-container">
              
            </span>
          </a>
</li>

		  
		      <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Custumer </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  	 <li><a href="?page=frmcustumer"><i class="fa fa-circle-o"></i> Tambah Data Custumer</a></li>
            <li><a href="?page=datacustumer"><i class="fa fa-circle-o"></i> Data Custumer </a></li>
          
          </ul>
		  
		    <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Barang </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		    <li><a href="?page=frmbarang"><i class="fa fa-circle-o"></i> Tambah Data Barang</a></li>
            <li><a href="?page=databarang"><i class="fa fa-circle-o"></i> Data Barang </a></li>
          
          </ul>
		  
		   <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Karyawan </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		    <li><a href="?page=frmkaryawan"><i class="fa fa-circle-o"></i> Tambah Data Karyawan</a></li>
            <li><a href="?page=datakaryawan"><i class="fa fa-circle-o"></i> Data Karyawan </a></li>
          
          </ul>
		  
		  
		         <a href="#">
            <i class="fa fa-list-alt"></i> <span>Selector</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?page=frmselector"><i class="fa fa-circle-o"></i> Form Selector</a></li>
			<!-- <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>-->
            <li><a href="?page=selector"><i class="fa fa-circle-o"></i>Data Harian selector</a></li>
			<!--<li><a href="pages/tables/datase.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
          </ul>
        </li>

       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Hasil Personil Selector </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  <li><a href="?page=hpersonil"><i class="fa fa-circle-o"></i> Hasil Personil</a></li>
		   <!-- <li><a href="?page=hasilpersonil"><i class="fa fa-circle-o"></i> Hasil Pengerjaan</a></li>
            <li><a href="?page=selectorl"><i class="fa fa-circle-o"></i> Hasil Reject</a></li>
			<li><a href="?page=hasil"><i class="fa fa-circle-o"></i> Hasil </a></li>
            <!--<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Hasil Pengerjaan</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Hasil Reject</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="?page=selector"><i class="fa fa-circle-o"></i> chart personil</a></li>-->
          </ul>
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
           <?php echo $_SESSION['username'];?> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		 <ul>
						<li>
							<a href="logout.php">Log out</a>
						</li>
						
					</ul>
        </li>
       
  

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>