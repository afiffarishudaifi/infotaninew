<?php
require "koneksi.php";
if (isset($_POST['ubah'])) {        //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
        $id = $_POST['id'];
        $hasil = $_POST['hasil'];
        $harga = $_POST['harga'];
        $status = $_POST['panen'];

        //sebuah query untuk menginputkan data ke table tb_siswa
        $query = "UPDATE panen SET HASIL=$hasil, HARGA=$harga, STATUS_PANEN='$status' where KTP=$id";

        $result = mysqli_query($koneksi, $query);

    if ($result) {?>
        <script language="JavaScript">
        alert('Tambah Panen Berhasil !');
        setTimeout(function() {window.location.href='../../pages/user/index.php'},10);
        </script><?php
    } else {?>
        <script language="JavaScript">
        alert('Tidak Bisa Menambah !');
        setTimeout(function() {window.location.href='../../pages/user/index.php'},10);
        </script><?php
    }
}
