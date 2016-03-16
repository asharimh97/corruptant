<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">
				<h4>Data Proyek Berjalan Hingga Sekarang</h4>
			</header>
			<div class="panel-body">
				<canvas id="line2" height="400" width="1100"></canvas>
			</div>
		</section>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">
				<h4>Tabel Data Proyek</h4>
			</header>
			<div class="panel-body">
				<table class="table table-hover table-striped">
					<tr>
						<th>No</th>
						<th>Nama Proyek</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Target</th>
						<th>Lembaga PJ</th>
						<th>&nbsp;</th>
					</tr>
					<!-- Dibawah ini loop seluruh data dalam tabel -->
					<?php 
						$myproyek = $act->selectOrder("proyek", "`tgl_mulai`", "DESC") ;
						$no = 1 ;
						while($showmyproyek = $myproyek->fetch_object()){
					?>
					<tr>
						<td><?php echo $no ;?></td>
						<td><?php echo $showmyproyek->nama_proyek ;?></td>
						<td><?php echo dateConvert($showmyproyek->tgl_mulai) ;?></td>
						<td><?php echo dateConvert($showmyproyek->tgl_target) ;?></td>
						<td><?php 
							$matchlem = $act->selectWhere("lembaga", "`id_lembaga` = '".$showmyproyek->lembaga."'") ;
							echo $matchlem->fetch_object()->nama ;
						?></td>
						<td>
							<a href="<?php echo ADMIN.'index.php?modules=proyek&actions=detail&id='.$showmyproyek->id_proyek ;?>" class="btn btn-success btn-xs"><span class="icon-eye-open"></span></a>
						</td>
					</tr>
					<?php
						$no++ ;}
					?>
				</table>
			</div>
		</section>
	</div>
</div>