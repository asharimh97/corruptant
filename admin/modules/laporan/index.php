<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">
				Statistik Penyampai Laporan
			</header>
			<div class="panel-body">
				<div class="custom-bar-chart">
				  <div class="bar">
					  <div class="title">JAN</div>
					  <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">30%</div>
				  </div>
				  <div class="bar doted">
					  <div class="title">FEB</div>
					  <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
				  </div>
				  <div class="bar ">
					  <div class="title">MAR</div>
					  <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
				  </div>
				  <div class="bar doted">
					  <div class="title">APR</div>
					  <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
				  </div>
				  <div class="bar">
					  <div class="title">MAY</div>
					  <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
				  </div>
				  <div class="bar doted">
					  <div class="title">JUN</div>
					  <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
				  </div>
				  <div class="bar">
					  <div class="title">JUL</div>
					  <div class="value tooltips" data-original-title="65%" data-toggle="tooltip" data-placement="top">65%</div>
				  </div>
				  <div class="bar doted">
					  <div class="title">AUG</div>
					  <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
				  </div>
				  <div class="bar ">
					  <div class="title">SEP</div>
					  <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
				  </div>
				  <div class="bar doted">
					  <div class="title">OCT</div>
					  <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
				  </div>
				  <div class="bar ">
					  <div class="title">NOV</div>
					  <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
				  </div>
				  <div class="bar doted">
					  <div class="title">DEC</div>
					  <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
				  </div>
		  </div>
		</section>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">Daftar Laporan Pengguna</header>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th>Judul Laporan</th>
						<th>Tujuan Laporan</th>
						<th>Tanggal Laporan</th>
						<th>&nbsp;</th>
					</tr>
					<?php 
						$lap = $act->selectOrder("laporan", "`tgl_laporan`", "DESC") ;
						if($lap->num_rows == 0){
							danger("Tidak ada data!") ;
						}else{
							$num = 1 ;
							while($rowl = $lap->fetch_object()){
					?>
					<tr>
						<td><?php echo $num ;?></td>
						<td><a href="<?php echo ADMIN.'index.php?modules=laporan&actions=detail&id='.$rowl->id_laporan;?>"><?php echo $rowl->judul ;?></a></td>
						<td><?php 
							$lem = $act->selectWhere("lembaga", "`id_lembaga` = '".$rowl->lembaga_tujuan."'") ;
							echo $lem->fetch_object()->nama ;
						?></td>
						<td><?php echo dateConvert($rowl->tgl_laporan) ;?></td>
						<td>
							<a href="<?php echo ADMIN.'index.php?modules=laporan&actions=detail&id='.$rowl->id_laporan ;?>" class="btn btn-success btn-xs"><span class="icon-eye-open"></span></a>
							<a href="<?php echo ADMIN.'index.php?modules=laporan&actions=delete&id='.$rowl->id_laporan ;?>" class="btn btn-danger btn-xs"><span class="icon-trash"></span></a>
						</td>
					</tr>
					<?php
							$num++ ;}
						}
					?>
				</table>
			</div>
		</section>
	</div>
</div>