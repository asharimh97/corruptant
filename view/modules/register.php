<?php 
	$act = new Actions ;
	if(!empty($_POST)){
		//olah data
		extract($_POST) ;
		if(empty($nama) || empty($email) || empty($user) || empty($pass) || empty($nik) || empty($ttl) || empty($gen) || empty($prov) || empty($kota) || empty($alamat) || empty($captcha)){
			$act->alertBack("Tidak boleh ada data yang kosong!") ;
		}else{
			// jika semua data terisi
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				// error email
				$act->alertBack("Email tidak sesuai!") ;
			}elseif(is_numeric($nama) || is_numeric($kota) || is_numeric($gen)){
				// error nama
				$act->alertBack("Nama tidak sesuai!") ;
			}elseif(!is_numeric($nik)){
				// error nik
				$act->alertBack("NIK Anda tidak sesuai!") ;
			}elseif(md5($captcha) != $_SESSION['captcha']){
				// error captcha
				$act->alertBack("Kode yang Anda tulis salah!") ;
			}else{
				// semua data sudah lengkap dan tidak ada error
				$sel = $act->selectWhere("user","`username` = '".$user."' OR `email` = '".$email."'") ;

				if($sel->num_rows == 1){
					// error same username
					$act->alertBack("Username/Email sudah terpakai!") ;
				}else{
					$pass = $act->enc($pass) ;
					$reg = $act->insert("user", "'$nik', '$nama', '$user', '$pass', '$email','$gen','$kota','$ttl','$prov','$alamat','0'") ;

					if($reg) $act->alertBack("Pendaftaran Sukses!") ;
					else $act->alertBack("Terdapat Error!") ;
				}
			}
		}
	}else{
		$act->alertBack("Maaf Anda tidak bisa mengakses halaman ini!") ;
	}
?>
