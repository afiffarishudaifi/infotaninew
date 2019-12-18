<!DOCTYPE html>
<html>
<?php
        include "../_partials/head.php";
?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <!--header-->
    <?php
            include "../_partials/headeruser.php";
    ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php
        include "../_partials/sidebaruser.php";
    ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Panen
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Panen</li>
      </ol>
    </section>
    <section class="content">
        <div class="container">
            <br>
    		<!--membuat sebuah form-->
            <form method="post" action="../../controller/user/controllerpanen.php">
                <div class="form-group">
                    <label>KTP</label>
                    <?php
                    $sql = "select MAX(ID_PANEN), panen.KTP, komoditas.NAMA_KOMODITAS, PANEN.TGL_PANEN, HASIL from petani, panen, komoditas
                    WHERE komoditas.ID_KOMODITAS=petani.ID_KOMODITAS and petani.KTP=panen.KTP and petani.id_user= $login_session AND HASIL=0";
                    $query = mysqli_query($koneksi, $sql);
                    $drow=mysqli_fetch_array($query);
                    ?>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $drow['KTP']; ?>">
                </div>
                <div class="form-group">
                    <label>Komoditas</label>
                    <input type="text" class="form-control" readonly value="<?php echo $drow['NAMA_KOMODITAS']; ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Panen</label>
                    <input type="text" class="form-control" readonly value="<?php echo $drow['TGL_PANEN']; ?>">
                </div>
                <div class="form-group">
                    <label>Hasil Panen</label>
    				<!--menginputkan sebuah inputan nim bertipe text-->
                    <input type="text" class="form-control"  value="<?php echo $drow['HASIL']; ?>" name="hasil" placeholder="Masukkan hasil panen dalam kg" required
                    onkeypress="return hanyaAngka(event)">
                </div>
                <input type="submit" name="ubah" class="btn btn-success" value="Simpan">
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