<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="../../img/user/<?php echo $gambar;?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php echo $_SESSION['USERNAME'] ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
      <a href="./index.php">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a href="./viewpetani.php">
        <i class="fa fa-users"></i> <span>Data Petani</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li class="treeview">
      <a href="./tambahpanen.php">
        <i class="fa fa-users"></i> <span>Form Panen</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li><a href="../user/laporan_panen.php"><i class="fa fa-book"></i> <span>Data Panen </span></a></li>

  </ul>

  </section>
