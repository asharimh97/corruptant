<?php 
	if(!empty($_POST)){
		extract($_POST) ;
?>
<section id="page-title" class="cvr">
    <div class="container clearfix">
        <h1>HASIL PENCARIAN</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo BASEPATH ;?>">Depan</a></li>
            <li class="active">Pencarian</li>
        </ol>
    </div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<?php 
				echo '<h3>Hasil pencarian untuk '.$s.'</h3>' ;
				$sel = $act->selectWhere("aspirasi","`judul` LIKE '%".$s."%'") ;

				if($sel->num_rows ==0 )
					danger("DATA YANG DICARI TIDAK ADA!") ;
				else{
					while($rows = $sel->fetch_object()){
			?>
			<div class="row">
				<div class="col-md-12">
					<h3><?php echo $rows->judul ;?></h3>
					<p class="text-justify"><?php echo substr($rows->aspirasi, 0,250)."..." ;?></p>
					<p class="text-right">Tanggal : <?php echo dateConvert($rows->tgl_aspirasi) ;?></p>
				</div>
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
</section>
<?php } ?>