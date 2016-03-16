<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">
				Statistik Penyampai Aspirasi
			</header>
			<div class="panel-body">
				<div class="custom-bar-chart">
				  <div class="bar">
					  <div class="title">JAN</div>
					  <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
				  </div>
				  <div class="bar doted">
					  <div class="title">FEB</div>
					  <div class="value tooltips" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
				  </div>
				  <div class="bar ">
					  <div class="title">MAR</div>
					  <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
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
					  <div class="value tooltips" data-original-title="10%" data-toggle="tooltip" data-placement="top">10%</div>
				  </div>
				  <div class="bar">
					  <div class="title">JUL</div>
					  <div class="value tooltips" data-original-title="35%" data-toggle="tooltip" data-placement="top">35%</div>
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
					  <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
				  </div>
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
						$asp = $act->selectOrder("aspirasi", "`tgl_aspirasi`", "DESC") ;
						if($asp->num_rows == 0){
							danger("Tidak ada data!") ;
						}else{
							$num = 1 ;
							while($rowl = $asp->fetch_object()){
					?>
					<tr>
						<td><?php echo $num ;?></td>
						<td><a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=detail&id='.$rowl->id_aspirasi;?>"><?php echo $rowl->judul ;?></a></td>
						<td><?php 
							$lem = $act->selectWhere("lembaga", "`id_lembaga` = '".$rowl->lembaga_tujuan."'") ;
							echo $lem->fetch_object()->nama ;
						?></td>
						<td><?php echo dateConvert($rowl->tgl_aspirasi) ;?></td>
						<td>
							<a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=detail&id='.$rowl->id_aspirasi ;?>"class="btn btn-success btn-xs"><span class="icon-eye-open"></span></a>
							<a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=delete&id='.$rowl->id_aspirasi ;?>"class="btn btn-danger btn-xs"><span class="icon-trash"></span></a>
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