<?php 
	$act = new Actions ;
	if(empty($_GET['id'])){
		$act->error404() ;
	}else{
		extract($_GET) ;
		// seleksi datanya
		$sel = $act->selectWhere("aspirasi", "`id_aspirasi` = '$id'") ;

		if($sel->num_rows == 1){
			$us = $_SESSION['user'] ;
			$ps = $_SESSION['pass'] ;
			$sel2 = $act->selectWhere("user", "`username` = '".$us."' AND `password` = '".$ps."'") ;
			$user = $sel2->fetch_object()->id ;
			$sel3 = $act->selectWhere("dukungan_aspirasi", "`id_aspirasi` = '".$id."' AND `id_user` = '".$user."'") ;

			if($sel3->num_rows == 1){
				$act->alertBack("Terima kasih. Tapi Anda sudah mendukung ini!") ;
			}else{
				// bila belum pernah melakukan dukungan..

				// do dukungan
				$date = date("Y-m-d H:i:s") ;
				$dukung = $sel->fetch_object()->pendukung+1 ;
				$do = $act->update("aspirasi", "`pendukung` = '".$dukung."'", "`id_aspirasi` = '".$id."'") ;
				$ins = $act->insert("dukungan_aspirasi", "'$id', '$user', '$date'") ;

				if($do) $act->alertBack("Dukungan berhasil!") ;
				else $act->alertBack("Dukungan gagal!") ;
			}
		}else{
			// throw to other page
			$act->alertGo("Data tidak ada", "../aspirasi") ;
		}
	}
?>