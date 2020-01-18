<?php
require "koneksi.php";
include "./phpmailer/class.phpmailer.php";
date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
if (isset($_POST['pesan'])) {        //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
    $id = $_POST['idperusahaan'];
    $ktp = $_POST['ktp'];
    $jumlah = $_POST['jmlpesan'];
    $jumlah_fix = str_replace(".","",$jumlah);
    $total = $_POST['total'];
    $total_fix = str_replace(".","",$total);
    $komoditas = $_POST['komoditas'];
    $petani = $_POST['namapetani'];
    $pengusaha = $_POST['namapengusaha'];
    $idpanen = $_POST['idpanen'];
    $result = mysqli_query($koneksi, "INSERT INTO PEMESANAN(ID_PERUSAHAAN, KTP, TANGGAL, JUMLAH_PESAN, TOTAL_BIAYA, ID_PESAN_STATUS, ID_PANEN) values('$id','$ktp','$tgl','$jumlah_fix','$total_fix','1','$idpanen')");

    
    if ($result) {

    $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com"; //host masing2 provider email
        $mail->SMTPDebug = 2;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "infotani.mif@gmail.com"; //user email
        $mail->Password = "infotani123"; //password email
        $mail->SetFrom($_POST['email'], $_POST['namapengusaha']); //set email pengirim
        $mail->Subject = "Pemesanan dari ".$_POST['namapengusaha']; //subyek email
        $mail->AddAddress("infotani.mif@gmail.com", "You");  //tujuan email

        $mail->MsgHTML("Ingin melakukan sebuah pemesanan kepada $petani dengan penjualan ".$_POST['komoditas']." sebesar ".$_POST['jmlpesan']." dengan Total Harga Rp.".$_POST['total']." oleh ".$_POST['namapengusaha']);

        if($mail->Send()) {?> <script language="JavaScript">
        alert('Berhasil Terkirim');
        </script><?php
        header("location:../../pages/pengusaha/riwayat.php");

    }else echo "Failed to sending message";
        ?>
    ?>
        <script language="JavaScript">
        alert('Tambah Pemesanan Berhasil !, Segera Bayar Tagihan sebelum 1 jam setelah pemesanan');
        setTimeout(function() {window.location.href=''},10);
        $mail->Send();
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
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').".jpg";
    //set path folder tempat menyimpan foto
    $path = "../../img/pengusaha/buktibayar/".$fotobaru;
    if(move_uploaded_file($tmp, $path)){
        $sql = mysqli_query
        ($koneksi, "UPDATE PEMESANAN SET FOTO='$fotobaru', ID_PESAN_STATUS = '2' WHERE ID_PESAN = '$id'") or die(mysqli_error($koneksi));
        if($sql){
            echo '?>
        <script language="JavaScript">
        alert("Tambah Pemesanan Berhasil !");
        setTimeout(function() {window.location.href="../../pages/pengusaha/riwayat.php"},10);
        </script><?php';
        }
        else{
            echo '<script language="JavaScript">
        alert("Tambah Pemesanan Gagal !"");
        setTimeout(function() {window.location.href="../../pages/pengusaha/riwayat.php"},10);
        </script>';
        }
    }
}
