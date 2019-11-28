<?php
session_start();
$error='';
if (isset($_GET['submit'])) {
if (empty($_GET['username']) || empty($_GET['password'])) {
        $error = "Username or Password is invalid";
    } else {
        // Variabel username dan password
        $username=$_GET['username'];
        $password=$_GET['password'];
        // Membangun koneksi ke database
        include "../koneksi.php";
        // Mencegah MySQL injection
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($koneksi, $username);
        $password = mysqli_real_escape_string($koneksi, $password);

        // SQL query untuk memeriksa apakah karyawan terdapat di database?
        $sql = "select * from user where PASSWORD='$password' AND USERNAME='$username'";
        $query = mysqli_query($koneksi, $sql);
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $c = mysqli_fetch_array($query);// Membuat Sesi/session

            $_SESSION['USERNAME'] = $c['USERNAME'];
            $_SESSION['ID_LEVEL'] = $c['ID_LEVEL'];
            $_SESSION['ID_USER'] = $c['ID_USER'];

            if ($c['ID_LEVEL']==1) {
            header("location:..\..\pages\admin\index.php");
            } elseif ($c['ID_LEVEL']==2) {
            header("location:..\..\pages\user\index.php");
            } else {
                die("error");
            }

// header("location: index.php"); // Mengarahkan ke halaman awal
        } else {
// header("location: index_login.php"); // Mengarahkan ke halaman login
?>
<script language="JavaScript">
        alert('Username atau Password Salah !');
        setTimeout(function() {window.location.href='../../pages/frontend/login.php'},10);
    </script>
<?php
        }
        mysqli_close($koneksi); // Menutup koneksi
    }
}
?>