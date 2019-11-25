<?php
session_start();
include "koneksi.php";
$error = '';
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo '<script>alert("Mohon masukkan Username dan Password."); document.location="../index.php";</script>';
        } 
		else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysqli_real_escape_string($koneksi, $username);
            $password = mysqli_real_escape_string($koneksi, $password);

            $sql = "select * from user where username='$username' and password='$password'";
            $query = mysqli_query($koneksi, $sql);
            $count= mysqli_num_rows($query);
            if ($count==1) {
                $cek = mysqli_fetch_array($query);
                $_SESSION['USERNAME'] = $cek['username'];
                header("location: ./index.php");
			}
             else{
                 echo '<script>alert("Username atau Password Salah."); document.location="../index.php";</script>';
                }
		}
	}
?>