<?php 
	/*
	* Project Name : Corruptant
	* Project Description : Aplikasi pemantauan untuk rakyat melihat perkembangan perekonomian di Indonesia. Corruption? Anti!
	* Author : SIS Squad for Hackathon Merdeka 3.0
	* Version : 1.0
	* All files are placed in folder /merdeka/ (parent)
		If you want to edit or add your own codes : 
		* Administrator files are in /admin/
		* User display are in /assets/
		* PHP library controller are in /lib/

		* Date created : 2 Desember 2015
		* Best regards SIS Squad Team
	*/ 

	// these are function for the bootstrap such as danger, pop up, etc

	function danger($text){
		echo '<div class="alert alert-danger alert-dismissible" role="alert">' ;
		
		echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' ;
		
		echo $text ;
		
		echo '</div>' ;
	}

	function dangerNo($text){
		echo '<div class="alert alert-danger alert-dismissible" role="alert">' ;
		
		echo $text ;
		
		echo '</div>' ;
	}
	
	function warning($text){
		echo '<div class="alert alert-warning alert-dismissible" role="alert">' ;
		
		echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' ;
		
		echo $text ;
		
		echo '</div>' ;
	}
	
	function success($text){
		echo '<div class="alert alert-success alert-dismissible" role="alert">' ;
		
		echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' ;
		
		echo $text ;
		
		echo '</div>' ;
	}
	
	function info($text){
		echo '<div class="alert alert-info alert-dismissible" role="alert">' ;
		
		echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' ;
		
		echo $text ;
		
		echo '</div>' ;
	}

	function dateConvert($data){
		$tgl = substr($data, 8,2) ;
		$bln = substr($data, 5,2) ;
		$thn = substr($data, 0,4) ;

		switch ($bln) {
			case 1 :$blne = "Januari" ;	break;
			case 2 :$blne = "Februari" ;	break;
			case 3 :$blne = "Maret" ;	break;
			case 4 :$blne = "April" ;	break;
			case 5 :$blne = "Mei" ;	break;
			case 6 :$blne = "Juni" ;	break;
			case 7 :$blne = "Juli" ;	break;
			case 8 :$blne = "Agustus" ;	break;
			case 9 :$blne = "September" ;	break;
			case 10 :$blne = "Oktober" ;	break;
			case 11 :$blne = "November" ;	break;
			case 12 :$blne = "Desember" ;	break;
			default : $blne = "Not Defined" ; break ;
		}

		return $tgl.' '.$blne.' '.$thn ;
	}

?>