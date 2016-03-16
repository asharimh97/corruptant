<?php 
	session_start() ;
	if(!empty($_SESSION['oauth'])){
		$_SESSION = array() ;
		unset($_SESSION) ;

		session_destroy() ;

		header("location:auth/login.php") ;

	}else{
		header("location:index.php") ;
	}
?>