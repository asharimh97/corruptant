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

	if(!empty($_GET)){
		if(file_exists("modules/".$modules."/create.php")){
			require "modules/".$modules."/create.php" ;
		}else{
			danger("Modul Tidak Tersedia") ;
		}
	}
?>