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

	class Router extends Actions{
		public function render($page){
			include "view/layout/header.php" ;

			include "view/modules/".$page.".php" ;

			include "view/layout/footer.php" ;
		}

		public function renderPartial($page){
			include "view/modules/".$page.".php" ;
		}

		public function setup(){
			include 'config.php' ;

			$act = new Actions ;

			if(!empty($_GET)){
				// if there is get method
				extract($_GET) ;

				if(!empty($page)){
					// if the requested data is page, then

					if($page == "admin" || $page == "backend"){
						// redirect to admin
						$this->redirAdmin("index.php") ;
						//header("location:index.php") ;
					}elseif($page == "404" || $page=="verify" || $page == "register" || $page=="sampaikan" || $page == "dukung"){
						// render partial 404
						$this->renderPartial($page) ;
					}else{
						if(file_exists("view/modules/".$page.".php")){
							//render full page if there is file page in modules
							include "view/layout/header.php" ;
							include "view/modules/".$page.".php" ;
							include "view/layout/footer.php" ;
						}else{
							// throw to 404
							$this->error404() ;
						}
					}
				}
			}else{
				// if get isn't set or empty, throw to home 
				//$this->render("home") ;
				include "view/layout/header.php" ;
				include "view/modules/home.php" ;
				include "view/layout/footer.php" ;
			}


		}
	}
?>