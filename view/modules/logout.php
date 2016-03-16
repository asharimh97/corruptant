<?php 
	if(!empty($_SESSION['auth'])){
		session_start() ;
		$_SESSION = array() ;
		unset($_SESSION) ; 

		session_destroy() ;
		header("location:login") ;
	}else{
		header("location:home") ;
	}
?>