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

	class Actions extends Db{
		public $query ;

		public $tbl = 'merdeka_' ;

		public function __construct(){
			return date_default_timezone_set("Asia/Jakarta") ;
		}

		// main query function to ease execution
		public function query($query){
			$con = $this->connect() ;

			$sql = $con->query($query) or die($con->error) ;

			return $sql ;
		}

		// function to select all data in a table
		public function selectAll($table){
			$query = "SELECT * FROM `".$this->tbl.$table."`" ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		public function selectSome($data,$table){
			$query = "SELECT ".$data." FROM `".$this->tbl.$table."`" ;

			$sql = $this->query($query) ;

			return $query ;
		}

		public function selectWhere($table,$where){
			$query = "SELECT * FROM `".$this->tbl.$table."` WHERE ".$where ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		public function selectSomeWhere($data,$table,$where){
			$query = "SELECT ".$data." FROM `".$this->tbl.$table."` WHERE ".$where ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		public function selectOrder($table,$order,$format){
			$query = "SELECT * FROM `".$this->tbl.$table."` ORDER BY ".$order." ".$format ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		public function selectOrderWhere($table,$where,$order,$format){
			$query = "SELECT * FROM `".$this->tbl.$table."` WHERE ".$where." ORDER BY ".$order." ".$format ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		public function selectFree($param){

			$sql = $this->query($param) ;

			return $sql ;
		}

		public function lastData($table,$order){
			$query = "SELECT * FROM `".$this->tbl.$table."` ORDER BY ".$order." DESC LIMIT 1" ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		// function to manipulate SQL

		public function insert($table,$values){
			$query = "INSERT INTO `".$this->tbl.$table."` VALUES (NULL,".$values.")" ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		public function delete($table,$where){
			$query = "DELETE FROM `".$this->tbl.$table."` WHERE ".$where ;

			$sql = $this->query($query) ;

			return $sql ;
		}

		public function update($table,$set,$where){
			$query = "UPDATE `".$this->tbl.$table."` SET ".$set." WHERE ".$where ;

			$sql = $this->query($query) ;

			return $sql ;
		}


		// general function for page 
		public function redir($page){
			echo "<script>" ;
				echo "window.location.href='".BASEPATH.$page."'" ;
			echo "</script>" ;
		}

		public function redirAdmin($page){
			echo '<script>' ;
				echo "window.location.href='".ADMIN.$page."'" ;
			echo '</script>' ;
		}

		public function redirBack(){
			echo "<script>" ;
				echo "window.history.back()" ;
			echo "</script>" ;
		}

		public function alertGo($text,$url){
			echo "<script>" ;
				echo "alert('".$text."') ;" ;
				echo "window.location.href='".$url."'" ;
			echo "</script>" ;
		}

		public function alertBack($text){
			echo "<script>" ;
				echo "alert('".$text."'); window.history.back() ;" ;
			echo "</script>" ;
		}

		public function error404(){
			header("location:".BASEPATH."404") ;
		}

		public function safety($data){
			return addslashes(htmlspecialchars(trim(strip_tags($data)))) ;
		}

		public function enc($data){
			$salt = "asd!323189^^4%##!as[]asd%123896RBa`~" ;

			return md5($salt.sha1($salt.$data.md5(sha1($data)))) ;
		}

		public function __destruct(){
			$sql = $this->connect() ;

			return $sql->close() ;
		}
	}
?>