<!DOCTYPE html>
<html>
<?php
        include_once "../_partials/head.php";
?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <!--header-->
    <?php
            include_once "../_partials/headerusaha.php";
    ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php
        include_once "../_partials/sidebarusaha.php";
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
              <h3 class="box-title">Data Tabel Pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                  <th>ID PESAN</th>
                  <TH>ID PERUSAHAAN</TH>
                  <TH>KTP</TH>
                  <th>TANGGAL</th>
                  <th>JUMLAH PESAN (KG)</th>
                  <th>TOTAL HARGA PESAN (RP)</th>
                  <th>STATUS PESAN</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../../controller/admin/koneksi.php";
                    //query untuk menampilkan data table dari tb_siswa
                    $query = mysqli_query($koneksi, "SELECT ID_PESAN, ID_PERUSAHAAN, KTP, TANGGAL, JUMLAH_PESAN, TOTAL_BIAYA, STATUS_PESAN FROM Pemesanan, PESAN where PESAN.ID_PESAN_STATUS=Pemesanan.ID_PESAN_STATUS and id_perusahaan= $id_pengguna");
                    //echo $query;
                    while($data = mysqli_fetch_array($query)) {  //merubah array dari objek ke array yang biasanya
                    ?>
                    <tr>
                        <!--memangambil data dari tabel dengan mengisikan data di table-->
                        <td><?php echo $data ['ID_PESAN'];?></td>
                        <td><?php echo $data ['ID_PERUSAHAAN'];?></td>
                        <td><?php echo $data ['KTP'];?></td>
                        <td><?php echo $data ['TANGGAL'];?></td>
                        <td><?php echo $data ['JUMLAH_PESAN'];?></td>
                        <td class="uang"><?php echo $data ['TOTAL_BIAYA'];?></td>
                        <td><?php echo $data ['STATUS_PESAN'];?></td>
                        
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
<script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $( '.uang' ).mask('000.000.000', {reverse: true});
            })
        </script>

</body>



</html>
