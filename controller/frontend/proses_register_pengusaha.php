<?php include "../koneksi.php"; ?>
<?php
		if(isset($_POST['submit'])){
			//memanggil nilai dari sebuah inputan dan ditampung kedalam variabel
			$username			= $_POST['username'];
			$password   		= $_POST['password'];
			$passwordConf			= $_POST['passwordConf'];
			$id_level	= 3;
			$foto = $_FILES['foto']['name'];
			$tmp = $_FILES['foto']['tmp_name'];

			//merename foto dengan menambah tgl dan jam upload
			$fotobaru = $foto;
			$fotobaru = date('dmYHis').".jpg";
			//set path folder tempat menyimpan foto
			$path = "../../img/pengusaha/SIUP/".$fotobaru;

            //cek database dengan select nim dari tb_siswa
			$cek = mysqli_query ($koneksi, "SELECT * FROM perusahaan WHERE username='$username'") or die(mysqli_error($koneksi));
			//dilakukan jika data = 0
			if(mysqli_num_rows($cek) == 0){
                if($password == $passwordConf){
					if(move_uploaded_file($tmp, $path)){
				    	$sql = mysqli_query
				    	($koneksi, "INSERT INTO perusahaan(username, password, siup, nama_perusahaan, email, alamat_perusahaan, no_telp_perusahaan, nama_manager, id_level)
				    	VALUES('$username', md5('$password'),'$siup', '$nama_perusahaan', '$email','$alamat_perusahaan', '$no_telp_perusahaan', '$nama_manager', '$id_level')") or die(mysqli_error($koneksi));

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
