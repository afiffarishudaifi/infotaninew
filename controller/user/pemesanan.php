<?php
require "koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
if (isset($_POST['pesan'])) {        //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
    $id = $_POST['idperusahaan'];
    $ktp = $_POST['ktp'];
    $jumlah = $_POST['jmlpesan'];
    $total = $_POST['total'];

    //sebuah query untuk menginputkan data ke table tb_siswa
    $query = "INSERT INTO PEMESANAN(ID_PERUSAHAAN, KTP, TANGGAL, JUMLAH_PESAN, TOTAL_BIAYA, ID_PESAN_STATUS) values('$id','$ktp','$tgl','$jumlah','$total','1')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {?>
        <script language="JavaScript">
        alert('Tambah Pemesanan Berhasil !, Segera Bayar Tagihan sebelum 1 jam setelah pemesanan');
        setTimeout(function() {window.location.href='../../pages/pengusaha/riwayat.php'},10);
        </script><?php
    } else {
        ?>
        <script language="JavaScript">
        alert('Tambah Pemesanan Gagal !');
        setTimeout(function() {window.location.href='../../pages/pengusaha/riwayat.php'},10);
        </script>
    <?php
    }
} elseif (isset($_POST['konfirmasi'])) {
    $id = $_POST['idpesan'];
        $sql = mysqli_query
        ($koneksi, "UPDATE PEMESANAN SET ID_PESAN_STATUS = '2' WHERE ID_PESAN = '$id'") or die(mysqli_error($koneksi));
        if($sql){
            echo '?>
        <script language="JavaScript">
        alert("Tambah Pemesanan Berhasil !");
        setTimeout(function() {window.location.href="../../pages/user/riwayat.php"},10);
        </script><?php';
        }
        else{
            echo '<script language="JavaScript">
        alert("Tambah Pemesanan Gagal !"");
        setTimeout(function() {window.location.href="../../pages/user/riwayat.php"},10);
        </script>';
        }
}