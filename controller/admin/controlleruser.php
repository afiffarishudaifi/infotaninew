<?php
require "koneksi.php";
require_once "../session.php";
    if (isset($_POST['simpan'])) {
        //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
            $username           = $_POST['username'];
            $password           = $_POST['password'];
            $passwordConf           = $_POST['passwordConf'];
            $level = $_POST['level'];
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            //merename foto dengan menambah tgl dan jam upload
            $fotobaru = $foto;
            $fotobaru = date('dmYHis').".jpg";
            //set path folder tempat menyimpan foto
            $path = "../../img/user/".$fotobaru;

            //cek database dengan select nim dari tb_siswa
            $cek = mysqli_query ($koneksi, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($koneksi));
            //dilakukan jika data = 0
            if(mysqli_num_rows($cek) == 0){
                if($password == $passwordConf){
                    if(move_uploaded_file($tmp, $path)){
                        $sql = mysqli_query
                        ($koneksi, "INSERT INTO user(id_level, username, password, foto_user)
                        VALUES('$level', '$username', '$password', '$fotobaru')") or die(mysqli_error($koneksi));

                        if($sql){
                            echo '<script>alert("Berhasil menambahkan data - Silahkan Login."); document.location="../../Pages/admin/viewuser.php";</script>';
                        }
                        else{
                            echo '<div class="alert alert-warning">Gagal melakukan registrasi</div>';
                        }
                    }
                }
                else{
                    echo '<script>alert("Gagal! Password tidak sama."); document.location="../../Pages/admin/viewuser.php";</script>';
                }
            }
            else{
                echo '<script>alert("Gagal! Username telah terdaftar"); document.location="../../Pages/admin/viewuser.php";</script>';
            }

    } else if (isset($_POST['ubah'])) {
        //memanggil sebuah nilai dari sebuah inputan dari form pendaftaran.php
        $id = $_POST['id_user'];
        $level = $_POST['level'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        //merename foto dengan menambah tgl dan jam upload
        $fotobaru = $foto;
        $fotobaru = $gambar.".jpg";
        //set path folder tempat menyimpan foto
        $path = "../../img/user/".$fotobaru;

        if (file_exists($gambar)) {
            unlink($gambar);
        } else {
            if(move_uploaded_file($tmp, $path)){
                $sql = mysqli_query
                ($koneksi, "UPDATE user SET ID_LEVEL='$level', USERNAME='$username',
                    PASSWORD='$password', FOTO_USER='$fotobaru' where ID_USER='$id'") or die(mysqli_error($koneksi));

                if($sql){
                    ?>
                        <script language="JavaScript">
                        alert('Ubah Berhasil !');
                        setTimeout(function() {window.location.href='../../pages/admin/viewuser.php'},10);
                        </script><?php
                }
                else{
                    ?>
                        <script language="JavaScript">
                        alert('Ubah Gagal !');
                        setTimeout(function() {window.location.href='../../pages/admin/viewuser.php'},10);
                        </script><?php
                }
            }
        }
    } else if(isset($_POST['hapus'])){
        $id = $_POST['idhapus'];
        //query untuk menampilkan sebuah query select dari table tb_siswa dengan id siswa sebagai parameter
        $query = "Delete FROM USER WHERE ID_USER='$id'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {?>
            <script language="JavaScript">
            alert('Hapus Berhasil !');
            setTimeout(function() {window.location.href='../../pages/admin/viewuser.php'},10);
            </script><?php
        }
    }
