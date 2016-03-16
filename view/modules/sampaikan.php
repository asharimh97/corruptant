<?php 
	$act = new Actions ;
	if(empty($_POST)){
		$act->error404() ;
	}else{
		extract($_POST) ;
		// do operations
		if(empty($ask) || empty($target) || empty($cerita) || empty($cat) || empty($prov)){
			$act->alertBack("Data tidak lengkap") ;
		}else{
			if(is_numeric($ask)){
				$act->alertBack("Judul Anda tidak valid") ;
			}else{
				$user = $_SESSION['user'] ;
				$pass = $_SESSION['pass'] ;
				$sel = $act->selectWhere("user", "`username` = '$user' AND `password` = '$pass'") ;
				$lem = $act->selectWhere("lembaga", "`nama` = '".$target."'") ;

				if($sel->num_rows == 1 && $lem->num_rows == 1){
					// lakukan olah data
					echo "Bisa masukkan data" ;
					$idl = $lem->fetch_object()->id_lembaga ;
					$idu = $sel->fetch_object()->id ;
					$now = date("Y-m-d H:i:s") ;

					$ins = $act->insert("aspirasi", "'$idu', '$ask', '$cerita', '$cat', '$idl', '$prov', '$now', '0'") ;

					if($ins) $act->alertGo("Terima kasih, suara Anda sangat membantu!", "aspirasi") ;
					else $act->alertBack("Terdapat error dalam menyampaikan aspirasi Anda!") ;
				}else{
					$act->alertBack("Data tidak valid! Coba Lagi!") ;
				}
			}
		}
	}
?>