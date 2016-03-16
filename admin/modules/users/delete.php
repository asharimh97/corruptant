<?php
	if(empty($_GET['id']) || !is_numeric($_GET['id'])){
		// error empty
		$act->alertBack("FORBIDDEN!") ;
	}else{
		extract($_GET) ;
		// check wheteher there is data
		$sel = $act->selectWhere("user", "`id` = '$id'") ;
		if($sel->num_rows ==1){
			//do deletion
			$del = $act->delete("laporan", "`id` = '".$id."'") ;

			if($del) $act->alertBack("User berhasil dihapus!") ;
			else $act->alertBack("User gagal dihapus!") ;
		}else{
			// error no data
			$act->alertBack("Tidak Ada Data!") ;
		}
	}
?>