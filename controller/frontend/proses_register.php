<?php include "../koneksi.php"; ?>
<?php
		if(isset($_POST['submit'])){
			//memanggil nilai dari sebuah inputan dan ditampung kedalam variabel
			$username			= $_POST['username'];
			$password   		= $_POST['password'];
			$passwordConf			= $_POST['passwordConf'];
			$id_level	= 2;
			$foto = $_FILES['foto']['name'];
			$tmp = $_FILES['foto']['tmp_name'];

			//merename foto dengan menambah tgl dan jam upload
			$fotobaru = date('dmYHis').$foto;
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
				    	VALUES('$id_level', '$username', '$password', '$fotobaru')") or die(mysqli_error($koneksi));
				
				    	if($sql){
					    	echo '<script>alert("Berhasil menambahkan data - Silahkan Login."); document.location="../../Pages/frontend/login.php";</script>';
                    	}
                    	else{
					    	echo '<div class="alert alert-warning">Gagal melakukan registrasi</div>';
						}
					}
                }
                else{
                    echo '<script>alert("Gagal! Password tidak sama."); document.location="../../Pages/frontend/register.php";</script>';
                }
            }
            else{
				echo '<script>alert("Gagal! Username telah terdaftar"); document.location="../../Pages/frontend/register.php";</script>';
			}
		}
	?>