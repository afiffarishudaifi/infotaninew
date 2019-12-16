<!DOCTYPE html>
<html>
<?php
    require_once "../../controller/admin/koneksi.php";
        include "../_partials/head.php";
        date_default_timezone_set('Asia/Jakarta');
        $tgll = date("Y-m-d");
        $tahun = date("Y");
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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12">
            <?php
            $cek = "select * from PANEN, petani where petani.KTP=PANEN.KTP and HASIL=0";
            $querycek = mysqli_query($koneksi, $cek);
            $hasilcek=mysqli_fetch_array($querycek);
            if($hasilcek>=1) {
                ?>
                    <script language="JavaScript">
                    alert('Tambah Hasil Panen !');
                    setTimeout(function() {window.location.href='./tambahpanen.php'},10);
                    </script><?php
            } else {

            $iduserpetani = $_SESSION['ID_USER'];
            $query1 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 01 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql1 = mysqli_query($koneksi, $query1);
            while ($data1 = mysqli_fetch_row($sql1)) {
                $id1 = $data1[0];
            }

            $query2 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 02 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql2 = mysqli_query($koneksi, $query2);
            while ($data2 = mysqli_fetch_row($sql2)) {
                $id2 = $data2[0];
            }

            $query3 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 03 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql3 = mysqli_query($koneksi, $query3);
            while ($data3 = mysqli_fetch_row($sql3)) {
                $id3 = $data3[0];
            }

            $query4 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 04 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql4 = mysqli_query($koneksi, $query4);
            while ($data4 = mysqli_fetch_row($sql4)) {
                $id4 = $data4[0];
            }

            $query5 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 05 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql5 = mysqli_query($koneksi, $query5);
            while ($data5 = mysqli_fetch_row($sql5)) {
                $id5 = $data5[0];
            }

            $query6 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 06 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql6 = mysqli_query($koneksi, $query6);
            while ($data6 = mysqli_fetch_row($sql6)) {
                $id6 = $data6[0];
            }

            $query7 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 07 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql7 = mysqli_query($koneksi, $query7);
            while ($data7 = mysqli_fetch_row($sql7)) {
                $id7 = $data7[0];
            }

            $query8 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 08 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql8 = mysqli_query($koneksi, $query8);
            while ($data8 = mysqli_fetch_row($sql8)) {
                $id8 = $data8[0];
            }

            $query9 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 09 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql9 = mysqli_query($koneksi, $query9);
            while ($data9 = mysqli_fetch_row($sql9)) {
                $id9 = $data9[0];
            }

            $query10 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 10 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql10 = mysqli_query($koneksi, $query10);
            while ($data10 = mysqli_fetch_row($sql10)) {
                $id10 = $data10[0];
            }

            $query11 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 11 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql11 = mysqli_query($koneksi, $query11);
            while ($data11 = mysqli_fetch_row($sql11)) {
                $id11 = $data11[0];
            }

            $query12 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=1 AND month(PANEN) = 12 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sql12 = mysqli_query($koneksi, $query12);
            while ($data12 = mysqli_fetch_row($sql12)) {
                $id12 = $data12[0];
            }




            //jagung
            $queryl1 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 01 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll1 = mysqli_query($koneksi, $queryl1);
            while ($datal1 = mysqli_fetch_row($sqll1)) {
                $idl1 = $datal1[0];
            }

            $queryl2 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 02 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll2 = mysqli_query($koneksi, $queryl2);
            while ($datal2 = mysqli_fetch_row($sqll2)) {
                $idl2 = $datal2[0];
            }

            $queryl3 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 03 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll3 = mysqli_query($koneksi, $queryl3);
            while ($datal3 = mysqli_fetch_row($sqll3)) {
                $idl3 = $datal3[0];
            }

            $queryl4 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 04 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll4 = mysqli_query($koneksi, $queryl4);
            while ($datal4 = mysqli_fetch_row($sqll4)) {
                $idl4 = $datal4[0];
            }

            $queryl5 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 05 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll5 = mysqli_query($koneksi, $queryl5);
            while ($datal5 = mysqli_fetch_row($sqll5)) {
                $idl5 = $datal5[0];
            }

            $queryl6 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 06 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll6 = mysqli_query($koneksi, $queryl6);
            while ($datal6 = mysqli_fetch_row($sqll6)) {
                $idl6 = $datal6[0];
            }

            $queryl7 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 07 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll7 = mysqli_query($koneksi, $queryl7);
            while ($datal7 = mysqli_fetch_row($sqll7)) {
                $idl7 = $datal7[0];
            }

            $queryl8 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 08 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll8 = mysqli_query($koneksi, $queryl8);
            while ($datal8 = mysqli_fetch_row($sqll8)) {
                $idl8 = $datal8[0];
            }

            $queryl9 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 09 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll9 = mysqli_query($koneksi, $queryl9);
            while ($datal9 = mysqli_fetch_row($sqll9)) {
                $idl9 = $datal9[0];
            }

            $queryl10 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 10 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll10 = mysqli_query($koneksi, $queryl10);
            while ($datal10 = mysqli_fetch_row($sqll10)) {
                $idl10 = $datal10[0];
            }

            $queryl11 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 11 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll11 = mysqli_query($koneksi, $queryl11);
            while ($datal11 = mysqli_fetch_row($sqll11)) {
                $idl11 = $datal11[0];
            }

            $queryl12 = "SELECT count(*) FROM panen, petani WHERE petani.KTP=panen.KTP and petani.ID_USER= $iduserpetani and panen.KOMODITAS=2 AND month(PANEN) = 12 and year(PANEN) = $tahun AND ID_STATUS=1";
            $sqll12 = mysqli_query($koneksi, $queryl12);
            while ($datal12 = mysqli_fetch_row($sqll12)) {
                $idl12 = $datal12[0];
            }


            //insert into PANEN
            $querycari = "select * from petani where id_user=$iduserpetani";
            $sqlcari = mysqli_query($koneksi, $querycari);
            $rowcari = mysqli_fetch_assoc($sqlcari);
            $tglpanen =$rowcari['PANEN'];
            $KTP = $rowcari['KTP'];
            $status = $rowcari['ID_STATUS'];
            $komoditas = $rowcari['ID_KOMODITAS'];
            if ($tgll==$tglpanen) {
                $query = "update petani set ID_STATUS=1 WHERE KTP='$KTP'";
                $ubah = mysqli_query($koneksi, $query);
                if ($status==2) {
                    $queryinsertpanen = "insert into PANEN(KTP,TGL_PANEN,KOMODITAS) values($KTP,'$tgll', $komoditas)";
                    $insert = mysqli_query($koneksi, $queryinsertpanen);
                }
            }
            ?><!DOCTYPE HTML>
            <html>
            <head>
                 <script type="text/javascript">
                      window.onload = function () {
                           var chart = new CanvasJS.Chart("chartContainer", {
                                title: {
                                     text: "Laporan Perolehan Panen <?php echo $tahun;?>"
                                },
                                legend: {
                                     cursor: "pointer",
                                     itemclick: function (e) {
                                          if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                               e.dataSeries.visible = false;
                                          } else {
                                               e.dataSeries.visible = true;
                                          }

                                          e.chart.render();
                                     }
                                },
                                data: [{
                                     showInLegend: true,
                                     type: "line",
                                     name:"Padi",
                                     dataPoints: [
                                          { x: new Date(<?php echo $tahun;?>, 0, 1), y: <?php echo $id1;?> },
                                          { x: new Date(<?php echo $tahun;?>, 1, 1), y: <?php echo $id2;?> },
                                          { x: new Date(<?php echo $tahun;?>, 2, 1), y: <?php echo $id3;?> },
                                          { x: new Date(<?php echo $tahun;?>, 3, 1), y: <?php echo $id4;?> },
                                          { x: new Date(<?php echo $tahun;?>, 4, 1), y: <?php echo $id5;?> },
                                          { x: new Date(<?php echo $tahun;?>, 5, 1), y: <?php echo $id6;?> },
                                          { x: new Date(<?php echo $tahun;?>, 6, 1), y: <?php echo $id7;?> },
                                          { x: new Date(<?php echo $tahun;?>, 7, 1), y: <?php echo $id8;?> },
                                          { x: new Date(<?php echo $tahun;?>, 8, 1), y: <?php echo $id9;?> },
                                          { x: new Date(<?php echo $tahun;?>, 9, 1), y: <?php echo $id10;?> },
                                          { x: new Date(<?php echo $tahun;?>, 10, 1), y: <?php echo $id11;?> },
                                          { x: new Date(<?php echo $tahun;?>, 11, 1), y: <?php echo $id12;?> }
                                     ]
                                }, {
                                     showInLegend: true,
                                     type: "line",
                                     name:"Jagung",
                                     dataPoints: [
                                          { x: new Date(<?php echo $tahun;?>, 0, 1), y: <?php echo $idl1;?> },
                                          { x: new Date(<?php echo $tahun;?>, 1, 1), y: <?php echo $idl2;?> },
                                          { x: new Date(<?php echo $tahun;?>, 2, 1), y: <?php echo $idl3;?> },
                                          { x: new Date(<?php echo $tahun;?>, 3, 1), y: <?php echo $idl4;?> },
                                          { x: new Date(<?php echo $tahun;?>, 4, 1), y: <?php echo $idl5;?> },
                                          { x: new Date(<?php echo $tahun;?>, 5, 1), y: <?php echo $idl6;?> },
                                          { x: new Date(<?php echo $tahun;?>, 6, 1), y: <?php echo $idl7;?> },
                                          { x: new Date(<?php echo $tahun;?>, 7, 1), y: <?php echo $idl8;?> },
                                          { x: new Date(<?php echo $tahun;?>, 8, 1), y: <?php echo $idl9;?> },
                                          { x: new Date(<?php echo $tahun;?>, 9, 1), y: <?php echo $idl10;?> },
                                          { x: new Date(<?php echo $tahun;?>, 10, 1), y: <?php echo $idl11;?> },
                                          { x: new Date(<?php echo $tahun;?>, 11, 1), y: <?php echo $idl12;?> }
                                     ]
                                }/*, {
                                     showInLegend: true,
                                     type: "line",
                                     name:"Laporan Pembayaran",
                                     dataPoints: [
                                          { x: new Date(<?php //echo $tahun;?>, 0, 1), y: <?php //echo $idll1;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 1, 1), y: <?php //echo $idll2;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 2, 1), y: <?php //echo $idll3;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 3, 1), y: <?php //echo $idll4;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 4, 1), y: <?php //echo $idll5;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 5, 1), y: <?php //echo $idll6;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 6, 1), y: <?php //echo $idll7;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 7, 1), y: <?php //echo $idll8;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 8, 1), y: <?php //echo $idll9;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 9, 1), y: <?php //echo $idll10;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 10, 1), y: <?php //echo $idll11;?> },
                                          { x: new Date(<?php //echo $tahun;?>, 11, 1), y: <?php //echo $idll12;?> }
                                     ]
                                }*/]
                           });

                           chart.render();
                      }
                 </script>
                 <script src="../../chart/canvasjs.min.js"></script>
                 <title>CanvasJS Example</title>
            </head>
            <body>
                 <div id="chartContainer" style="height: 400px; width: 100%;">

                 </div>

            </body>
            </html>
        </div>
    </section>
    <!-- /.content -->
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
<?php } ?>
