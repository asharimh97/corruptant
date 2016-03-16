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

	session_start() ;

	// activate the settings path name
	include 'settings.php' ;

	// call the database function
	include 'database.php' ;
	$db = new Db ;
	$db->connect() ; // connection to database is activated

	// call the main settings model
	include 'dist/My_Actions.php' ;
	$act = new Actions ;

	// activate some external function
	require 'fungsi.php' ;
?>