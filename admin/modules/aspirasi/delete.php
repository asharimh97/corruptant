<?php
	if(empty($_GET['id'])){
		// error empty
		$act->alertBack("FORBIDDEN!") ;
	}else{
		extract($_GET) ;
		// check wheteher there is data
		$sel = $act->selectWhere("aspirasi", "`id_aspirasi` = '$id'") ;
		if($sel->num_rows ==1){
			//do deletion
			$del = $act->delete("aspirasi", "`id_aspirasi` = '".$id."'") ;

			if($del) $act->alertBack("Data berhasil dihapus!") ;
			else $act->alertBack("Data gagal dihapus!") ;
		}else{
			// error no data
			$act->alertBack("Tidak Ada Data!") ;
		}
	}
?>