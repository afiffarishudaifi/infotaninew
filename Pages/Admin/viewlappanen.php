<!DOCTYPE html>
<html>
<?php
        include_once "../_partials/head.php";
?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <!--header-->
    <?php
            include_once "../_partials/header.php";
    ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php
        include_once "../_partials/sidebar.php";
    ?>    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               <?php if (isset($_POST['submit'])) {
                    if ($_POST['pilih']==1) {
                        $tipe = "laporan_jagung";
                        $komoditaspanen = "Jagung";
                    } else {
                        $tipe = "laporan_padi";
                        $komoditaspanen = "Padi";
                    }
                }else {
                    $tipe = "laporan_panen";
                } ?>
              <h3 class="box-title">Laporan Panen <?php echo $komoditaspanen; ?></h3>
              <h3>
                  <form action="" method="POST">
                    <?php

                            echo "<select name='pilih' class='form-control hidden-print'>";

                        echo "<option value='belum memilih' selected>--Pilih Komoditas--</option>";
                        echo "<option value=1>Jagung</option>";
                        echo "<option value=2>Padi</option>";

                        echo "</select><br>";
                        echo "<button type='submit' name='submit' class='btn btn-warning hidden-print'>Pilih</button>   ";
                        echo "<button type='submit' name='submit1' class='btn btn-warning hidden-print'>Semua</button>";
                    ?>
                  </form>
              </h3>

               
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                  <th>ID PETANI</th>
                  <th>NAMA PETANI</th>
                  <th>DESA</th>
                  <th>KECAMATAN</th>
                  <th>TANGGAL PANEN</th>
                  <th>HASIL PANEN</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../../controller/admin/koneksi.php";
                    //query untuk menampilkan data table dari tb_siswa
                    $query = mysqli_query($koneksi, "select * from $tipe");
                    //echo $query;
                    while ($data = mysqli_fetch_array($query)) {  //merubah array dari objek ke array yang biasanya
                    ?>
                    <tr>
                        <!--memangambil data dari tabel dengan mengisikan data di table-->
                        <td><?php echo $data ['KTP'];?></td>
                        <td><?php echo $data ['NAMA_PETANI'];?></td>
                        <td><?php echo $data ['NAMA_DESA'];?></td>
                        <td><?php echo $data ['NAMA_KECAMATAN'];?></td>
                        <td><?php echo $data ['TGL_PANEN'];?></td>
                        <td><?php echo $data ['HASIL'];?></td>

                        </tr>
                    <?php
                    } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php
        include_once "../_partials/footer.php";
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
    include_once "../_partials/js.php";
?>


</body>



</html>
