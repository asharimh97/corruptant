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

	class Db{
		public $host = 'localhost' ;

		public $db = 'merdeka' ;

		public $user = 'root' ;

		public $pass = '' ;

		public function connect(){
			$con = new mysqli($this->host, $this->user, $this->pass, $this->db) ;

			return $con ;

			if($con->connect_errno){
				echo "ERROR : ".$con->error ;
			}
		}
	}
?>