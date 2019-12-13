<?php
session_start();
if (isset($_POST['submit'])) {
    // Membangun koneksi ke database
    include "../koneksi.php";        
    // Variabel username dan password
            $username=$_POST['username'];
            $password=$_POST['password'];
            $passwordConf=$_POST['passwordConf'];
            //tampung value
            $username = mysqli_real_escape_string($koneksi, $username);
            $password = mysqli_real_escape_string($koneksi, $password);
            $passwordConf = mysqli_real_escape_string($koneksi, $passwordConf);

            $cek = mysqli_query ($koneksi, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($koneksi));
           

            //cek
            if($password != $passwordConf){
                echo '<script> 
                alert ("Password tidak sama");
                </script>';
                header("location:../../Pages/frontend/register.php");
            }
            else{
                if(mysqli_num_rows($cek) == 0){
                // SQL query untuk memeriksa apakah karyawan terdapat di database?
                $sql = mysqli_query
				($koneksi, "INSERT INTO user (username, password) 
				VALUES('$username', '$password')") or die(mysqli_error($koneksi));
           echo" <script>
                alert('Silahkan login');
                </script>";
                header("location:..\..\pages\frontend\login.php");
            }
        }
    }
?>