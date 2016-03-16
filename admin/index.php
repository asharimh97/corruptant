<?php 
	require "../lib/config.php" ;
	//$act = new Actions ;

	if(empty($_SESSION['oauth'])){
		$act->redirAdmin("auth/login.php") ;
	}
	require "layout/header.php" ;
	require "layout/sidebar.php" ;
?>
<section id="main-content">
	<section class="wrapper">
<?php 
	
	if(!empty($_GET)){
		// if there is get, olah data to show in html
		extract($_GET) ;
?>
<ol class="breadcrumb">
	<li><a href="<?php echo ADMIN."index.php" ;?>">Administrator</a></li>
	<?php 
		echo '<li class="active"><a href="'.ADMIN.'index.php?modules='.$modules.'&actions=index">'.strtoupper(substr($modules, 0, 1)).substr($modules, 1).'</a></li>' ;	
		if($actions == "detail"){
			echo '<li><a href="'.ADMIN.'index.php?modules='.$modules.'&actions=detail">Detail</a></li>' ;
			echo '<li class="active"><a href="'.ADMIN.'index.php?modules='.$modules.'&actions=detail&id='.$id.'">'.$id.'</a></li>' ;
		}elseif($actions == "update"){
			echo '<li><a href="'.ADMIN.'index.php?modules='.$modules.'&actions=update">Edit</a></li>' ;
			echo '<li class="active"><a href="'.ADMIN.'index.php?modules='.$modules.'&actions=update&id='.$id.'">'.$id.'</a></li>' ;
		}elseif($actions == "create"){
			echo '<li class="active"><a href="'.ADMIN.'index.php?modules='.$modules.'&actions=create">Create</a></li>' ;
		}
	?>
</ol>
<?php 
		if(file_exists("actions/".$actions.".php")){
			require "actions/".$actions.".php" ;
		}else{
			alertGo("Maaf Modul Tidak Tersedia", "admin") ;
		}
?>
<?php
	}else{
		include "actions/index.php" ;
	}
?>
	</section>
</section>
<?php 
	require "layout/footer.php" ;
?>