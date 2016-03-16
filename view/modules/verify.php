<?php 
	$act = new Actions ;
	if(!empty($_POST)){
		extract($_POST) ;
		if(empty($user) || empty($pass)){
			// show error of empty
		}else{
			// do more sorting
			$pass = $act->enc($pass) ;
			if(!filter_var($user,FILTER_VALIDATE_EMAIL)){
				// if inserted value is username
				$sel = $act->selectWhere("user", "`username` = '".$user."' AND `password` = '".$pass."'") ;
			}else{
				// if inserted value is email
				$sel = $act->selectWhere("user", "`email` = '".$user."' AND `password` = '".$pass."'") ;
			}

			if($sel->num_rows == 1){
				// olah data
				$row = $sel->fetch_object() ;
				$now = date("Y-m-d H:i:s") ;
				$_SESSION['user'] = $row->username ;
				$_SESSION['pass'] = $row->password ;
				$_SESSION['auth'] = md5($row->username.$row->password.$now) ;

				$act->redir("home") ;
			}else{
				//echo "TIDAK TERDAFTAR" ;
				$act->alertBack("Maaf Anda belum terdaftar dalam Corruptant!") ;
			}
		}
	}else{
		$act->alertBack("Maaf Anda tidak bisa mengakses halaman ini") ;
	}
?>