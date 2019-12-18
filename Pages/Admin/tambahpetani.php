<!DOCTYPE html>
<html>
<?php
        include "../_partials/head.php";
?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <!--header-->
    <?php
            include "../_partials/header.php";
    ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php
        include "../_partials/sidebar.php";
    ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Petani
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Petani</li>
      </ol>
    </section>
    <section class="content">
        <div class="container">
    		<br>
    		<!--membuat sebuah form-->
    		<form method="post" action="../../controller/admin/controllerdesa.php">
          <div class="form-group">
            <label>KTP</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="KTP" placeholder="Masukkan KTP" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group">
            <label>Kecamatan</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan Kecamatan" required >
          </div>
          <div class="form-group">
            <label>Komoditas</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="komoditas" placeholder="Masukkan Komoditas" required">
          </div>
          <div class="form-group">
            <label>Status Pengguna</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="status" placeholder="Status Pengguna" required onkeypress="return hanyaTulisan(event)">
          </div>
          <div class="form-group">
            <label>Nama Petani</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Petani" required onkeypress="return hanyaTulisan(event)">
          </div>
          <div class="form-group">
            <label>Alamat Petani</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat Desa" required>
          </div>

          <div class="form-group">
            <label>No HP Petani</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="namadesa" placeholder="Masukkan No hp" required>
          </div>
    			<div class="form-group">
    				<label>Luas Sawah</label>
    				<!--menginputkan sebuah inputan nim bertipe text-->
    				<input type="text" class="form-control" name="namadesa" placeholder="Masukkan Luas Sawah" required onkeypress="return hanyaAngka(event)">
    			</div>

          <div class="form-group">
            <label>Tanggal Tanam</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="namadesa" placeholder="Masukkan tanggal tanam" required>
          </div>
          <div class="form-group">
            <label>Tanggal Panen</label>
            <!--menginputkan sebuah inputan nim bertipe text-->
            <input type="text" class="form-control" name="namadesa" placeholder="Masukkan tanggal panen" required>
          </div>
    			<input type="submit" name="simpan" class="btn btn-success" value="Simpan">
    			<input type="reset" name="reset" class="btn btn-danger" value="Hapus">
    		</form>
    	</div>
    </section>
    <br><br>
    </div>
  <!-- /.content-wrapper -->
  <?php
        include "../_partials/footer.php";
  ?>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php
    include "../_partials/js.php";
?>
</body>
</html>
