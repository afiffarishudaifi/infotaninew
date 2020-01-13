<!DOCTYPE html>
<html>
<?php
        include_once "../_partials/head.php";
?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <!--header-->
    <?php
            include_once "../_partials/headeruser.php";
            date_default_timezone_set('Asia/Jakarta');
        $tgll = date("Y-m-d");
        $tgl = date("d");
        $tahun = date ("Y");
    ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php
        include_once "../_partials/sidebaruser.php";
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
                  $bulanpilih = $_POST['bulanpilih'];
                  $lanjut = "select * from pemesanan where month(TANGGAL) = $bulanpilih AND year(TANGGAL)=$tahun and KTP=$ktppetani";
                }else {
                    $bulanpilih = 'Tahun '.$tahun;
                    $lanjut = "select * from pemesanan where KTP=$ktppetani";
                } ?>
              <h3 class="box-title">Laporan Panen <?php echo $bulanpilih; ?></h3>
              <h3>
                  <form action="" method="POST">
                       <?php

                    echo "<select name='bulanpilih' class='form-control hidden-print'>";
                    
                    echo "<option value='belum memilih' selected>--Pilih Id Bulan--</option>";
                    echo "<option value=01>Januari</option>";
                    echo "<option value=02>Februari</option>";
                    echo "<option value=03>Maret</option>";
                    echo "<option value=04>April</option>";
                    echo "<option value=05>Mei</option>";
                    echo "<option value=06>Juni</option>";
                    echo "<option value=07>Juli</option>";
                    echo "<option value=08>Agustus</option>";
                    echo "<option value=09>September</option>";
                    echo "<option value=10>Oktober</option>";
                    echo "<option value=11>November</option>";
                    echo "<option value=12>Desember</option>";
                    
                    echo "</select><br>";
                    echo "<button type='submit' name='submit' class='btn btn-warning hidden-print'>Pilih</button>  ";
                    echo "<button type='submit' name='submit1' class='btn btn-aqua hidden-print'>Semua</button>";
                  ?>
                  </form>
              </h3>

               
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                  <th>ID PEMESANAN</th>
                  <th>ID PERUSAHAAN</th>
                  <th>TANGGAL</th>
                  <th>JUMLAH_PESAN</th>
                  <th>TOTAL BIAYA</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../../controller/admin/koneksi.php";
                    //query untuk menampilkan data table dari tb_siswa
                    $query = mysqli_query($koneksi, $lanjut);
                    //echo $query;
                    while ($data = mysqli_fetch_array($query)) {  //merubah array dari objek ke array yang biasanya
                    ?>
                    <tr>
                        <!--memangambil data dari tabel dengan mengisikan data di table-->
                        <td><?php echo $data ['ID_PESAN'];?></td>
                        <td><?php echo $data ['ID_PERUSAHAAN'];?></td>
                        <td><?php echo $data ['TANGGAL'];?></td>
                        <td><?php echo $data ['JUMLAH_PESAN'];?></td>
                        <td><?php echo $data ['TOTAL_BIAYA'];?></td>

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