<?php 
	if(empty($id)){
		$act->error404() ;
	}else{
		$sel = $act->selectWhere("aspirasi", "`id_aspirasi` = '$id'") ;
		if($sel->num_rows == 0){
			$act->alertBack("Data tidak ditemukan!") ;
		}else{
			$row = $sel->fetch_object() ;
		}
	}
?>
<section id="page-title" class="cvr2">
    <div class="container clearfix">
        <h1>ASPIRASI</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo BASEPATH ;?>">Depan</a></li>
            <li><a href="<?php echo BASEPATH.'aspirasi' ;?>">Aspirasi</a></li>
            <li class="active"><?php echo $row->judul ;?></li>
        </ol>
    </div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<h2><?php echo $row->judul ;?></h2>
			<p class="small text-left">
				<?php 
					$us = $act->selectWhere("user", "`id` = '".$row->id_user."'") ;
					echo 'Oleh : '.$us->fetch_object()->nama.'. Pada '.dateConvert($row->tgl_aspirasi) ;
				?>
			</p>
			<p class="text-justify">
				<?php echo $row->aspirasi ;?>
			</p>
		</div>
	</div>
</section>