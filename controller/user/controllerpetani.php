 <?php
 require "koneksi.php";

 if (isset($_POST['ubah'])) {
         //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
         $KTP = $_POST['KTP'];
         $kecamatan = $_POST['idkecamatan'];
         $komoditas = $_POST['idkomoditas'];
         $namapetani = $_POST['namapetani'];
         $alamatpetani = $_POST['alamatpetani'];
         $nohp = $_POST['nohp'];
         $luassawah = $_POST['luassawah'];
         $alamatsawah = $_POST['alamatsawah'];
         $tgltanam = $_POST['tgltanam'];
         $tgltanam1 = date('Y-m-d',strtotime($tgltanam));
         $tglpanen = $_POST['tglpanen'];
         $tglpanen1 = date('Y-m-d',strtotime($tglpanen));
         $status = $_POST['idstatus'];

         //sebuah query untuk menginputkan data ke table tb_siswa
         $query = "UPDATE PETANI SET ID_KECAMATAN='$kecamatan', ID_KOMODITAS='$komoditas', 
         ID_STATUS='$status', NAMA_PETANI='$namapetani', ALAMAT_PETANI='$alamatpetani', NO_HP='$nohp', LUAS_SAWAH='$luassawah',
         ALAMAT_SAWAH='$alamatsawah', TANAM='$tgltanam1', PANEN='$tglpanen1' where KTP='$KTP'";

         $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

         if ($result) {?>
             <script language="JavaScript">
             alert('Ubah Berhasil !');
             setTimeout(function() {window.location.href='../../pages/user/index.php'},10);
             </script><?php
         } else {
            ?>
                <script language="JavaScript">
                alert('Gagal Mengubah Data !');
                setTimeout(function() {window.location.href='../../pages/user/index.php'},10);
                </script><?php
        }
     }
