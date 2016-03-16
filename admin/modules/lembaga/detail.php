<?php 
	if(empty($id) || !is_numeric($id)){
		$act->alertBack("Maaf Anda tidak bisa mengakses halaman ini ;") ;
	}else{
		$sel = $act->selectWhere("lembaga", "`id_lembaga` = '".$id."'") ;
		if($sel->num_rows == 0){
			$act->alertBack("Lembaga tidak ditemukan") ;
		}else{
			$lem = $sel->fetch_object() ;
		}
	}
?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel">
			<div class="panel-body">
				<div class="col-md-4">LOGO LEMBAGA DISINI</div>
				<div class="col-md-8">
					<canvas id="line5" height="250" width="600"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel">
			<header class="panel-heading"><?php echo $lem->nama ;?></header>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<td class="col-md-3">Nama Lembaga</td>
						<td><?php echo $lem->nama ;?></td>
					</tr>
					<tr>
						<td>Kategori Lembaga</td>
						<td><?php $sel2 = $act->selectWhere("kategori_lembaga", "`id_kategori` = '".$lem->kategori."'") ; echo $sel2->fetch_object()->kategori ; ?></td>
					</tr>
					<tr>
						<td>Alamat Lembaga</td>
						<td><?php echo $lem->alamat ;?></td>
					</tr>
					<tr>
						<td>No Telepon Lembaga</td>
						<td>Not set (soon)</td>
					</tr>
					<tr>
						<td>Penanggung Jawab Lembaga</td>
						<td><?php echo $lem->pj ;?></td>
					</tr>
					<tr>
						<td>Identitas Penanggung Jawab</td>
						<td><?php echo $lem->nik_pj ;?></td>
					</tr>
					<tr>
						<td>No Telepon PJ Lembaga</td>
						<td><?php echo $lem->telp ;?></td>
					</tr>
					<tr>
						<td>Total Pengeluaran Lembaga</td>
						<td>Not set(soon)</td>
					</tr>
					<tr>
						<td>Total Pemasukan Lembaga</td>
						<td>Not set (soon)</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="alert alert-danger">
								This alert shows when outcome much greater than income
							</div>
							<div class="alert alert-info">
								This alert shows when outcome just greater/lower than income
							</div>
							<div class="alert alert-success">
								This alert shows when outcome much lower than income
							</div>
						</td>
					</tr>
					<tr>
						<td>Total Proyek</td>
						<td><?php echo $lem->proyek ;?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="panel">
			<header class="panel-heading">Pemasukan Lembaga</header>
			<div class="panel-body">
				<div class="alert alert-danger">
					NANTI ADA TABLE DISINI
					<br> Coming soon
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel">
			<header class="panel-heading">Pengeluaran Lembaga</header>
			<div class="panel-body">
				<div class="alert alert-danger">
					NANTI ADA TABLE DISINI
					<br> Coming soon
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row" id="proyekd">
	<div class="col-md-12">
		<div class="panel">
			<header class="panel-heading">Proyek yang dilaksanakan</header>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<th>No</th>
						<th>Nama Proyek</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Target</th>
						<th>Status</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						<?php 
							$selpro = $act->selectWhere("proyek", "`lembaga` = '$id'") ;
							if($selpro->num_rows == 0){
								dangerNo("Tidak ada data") ;
							}else{
								$no = 1 ;
								while($rows = $selpro->fetch_object()){
						?>
						<tr>
							<td><?php echo $no ;?></td>
							<td><a href="<?php echo ADMIN.'index.php?modules=proyek&actions=detail&id='.$rows->id_proyek ;?>"><?php echo $rows->nama_proyek ;?></a></td>
							<td><?php echo dateConvert($rows->tgl_mulai) ;?></td>
							<td><?php echo dateConvert($rows->tgl_target) ;?></td>
							<td><?php
								$stat = $rows->status_proyek ;
								if($stat == "Berjalan"){
									echo '<span class="label label-warning">Berjalan</span>' ;
								}elseif($stat == "Berhenti"){
									echo '<span class="label label-danger">Berhenti</span>' ;
								}elseif($stat == "Selesai"){
									echo '<span class="label label-success">Selesai</span>' ;
								}
							?></td>
							<td>
								<a href="<?php echo ADMIN.'index.php?modules=proyek&actions=detail&id='.$rows->id_proyek ;?>" class="btn btn-success btn-xs"><i class="icon-eye-open"></i></a>
							</td>
						</tr>
						<?php
								$no++ ;}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>