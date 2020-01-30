<?php
include "../koneksi.php";

//Ganti password
if (isset($_POST['Ganti'])) {
    $iduser = $_POST['iduser'];
    $pass_baru = $_POST['pass_baru'];
    $pass_konf = $_POST['pass_konf'];

    //Cek Password Lama
    $query = "SELECT PASSWORD FROM user WHERE ID_USER=$iduser";
    $sql = mysqli_query($koneksi, $query);
    $hasil = mysqli_num_rows($sql);
    if (!$hasil >= 1) {
    ?>
        <script language="JavaScript">
        alert('Username Tidak Ada, Silahkan ulang kembali !');
        setTimeout(function() {window.location.href='../../pages/frontend/formlupapass'},10);
        </script>
    <?php
        // unset($_SESSION['userid']);
        // session_destroy();
    }
    //Validasi input konfirm
    else if (($_POST['pass_baru']) !=($_POST['pass_konf'])) {
        ?>
        <script language="JavaScript">
        alert('Gagal Ganti Katasandi,Katasandi Baru harus sama dengan Katasandi Konfirmasi!');
        setTimeout(function() {window.location.href='../../pages/user/pengaturan'},10);
        </script>
    <?php
    }
    //Update data
    else{
        $query = "UPDATE user SET password = md5('$pass_baru') WHERE ID_USER='$iduser'";
        $sql = mysqli_query($koneksi,$query);
        //Setelah diupdate
        if($sql){
            ?>
            <script language="JavaScript">
            alert('Katasandi Berhasil di Perbarui!');
            setTimeout(function() {window.location.href='../../pages/frontend/login'},10);
            </script>
        <?php
            }
        else{
            ?>
            <script language="JavaScript">
            alert('Katasandi Gagal di Perbarui !');
            </script>
        <?php

        }
    }
}

?>
