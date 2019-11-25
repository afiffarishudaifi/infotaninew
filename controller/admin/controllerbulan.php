<?php
require "koneksi.php";

    if (isset($_POST['simpan'])) {
        //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
        $bulan = $_POST['namabulan'];

        //sebuah query untuk menginputkan data ke table tb_siswa
        $query = "INSERT INTO bulan (NAMA_BULAN) VALUES ('$bulan')";

        $result = mysqli_query($koneksi, $query);

        if ($result) {?>
            <script language="JavaScript">
            alert('Tambah Berhasil !');
            setTimeout(function() {window.location.href='../../pages/admin/viewbulan.php'},10);
            </script><?php
        }
    } else if (isset($_POST['ubah'])) {
        //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
        $id = $_POST['id_bulan'];
        $bulan = $_POST['namabulan'];

        //sebuah query untuk menginputkan data ke table tb_siswa
        $query = "UPDATE bulan SET NAMA_BULAN='$bulan' where ID_BULAN='$id'";

        $result = mysqli_query($koneksi, $query);

        if ($result) {?>
            <script language="JavaScript">
            alert('Ubah Berhasil !');
            setTimeout(function() {window.location.href='../../pages/admin/viewbulan.php'},10);
            </script><?php
        }
    } else if(isset($_POST['hapus'])){
        $id = $_POST['idhapus'];
        //query untuk menampilkan sebuah query select dari table tb_siswa dengan id siswa sebagai parameter
        $query = "Delete FROM bulan WHERE ID_BULAN='$id'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {?>
            <script language="JavaScript">
            alert('Hapus Berhasil !');
            setTimeout(function() {window.location.href='../../pages/admin/viewbulan.php'},10);
            </script><?php
        }
    }
