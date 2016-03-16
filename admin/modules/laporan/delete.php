<?php
	if(empty($_GET['id'])){
		// error empty
		$act->alertBack("FORBIDDEN!") ;
	}else{
		extract($_GET) ;
		// check wheteher there is data
		$sel = $act->selectWhere("laporan", "`id_laporan` = '$id'") ;
		if($sel->num_rows ==1){
			//do deletion
			$del = $act->delete("laporan", "`id_laporan` = '".$id."'") ;

			if($del) $act->alertBack("Data berhasil dihapus!") ;
			else $act->alertBack("Data gagal dihapus!") ;
		}else{
			// error no data
			$act->alertBack("Tidak Ada Data!") ;
		}
	}
?>