<?php 
	require "../../lib/config.php" ;
	$act = new Actions ;

	if(!empty($_POST)){
		extract($_POST) ;
		if(empty($user) || empty($pass)){
			// error empty
			$act->alertBack("data harus diisi!") ;
		}else{
			$pass = $act->enc($pass) ;
			if(!filter_var($user,FILTER_VALIDATE_EMAIL)){
				$sel = $act->selectWhere("admin", "`username` = '".$user."' AND `password` = '".$pass."'") ;
			}else{
				$sel = $act->selectWhere("admin", "`email` = '".$user."' AND `password` = '".$pass."'") ;
			}

			if($sel->num_rows == 1){
				// do the process
				$row = $sel->fetch_object() ;
				$date = date("Y-m-d H:i:s") ;
				$_SESSION['admin'] = $row->username ;
				$_SESSION['ad_pass'] = $row->password ;
				$_SESSION['oauth'] = md5($row->username.$row->password.$date) ;

				$act->redirAdmin("index.php") ;
			}else{
				$act->alertBack("Anda bukan Admin!") ;
			}
		}
	}else{
		$act->alertBack("Maaf Anda tidak bisa mengakses halaman ini!") ;
	}
?>