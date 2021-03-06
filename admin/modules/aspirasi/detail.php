<?php 
	if(empty($_GET['id']) || !is_numeric($_GET['id'])){
		// error empty
	}else{
		$sel = $act->selectWhere("aspirasi", "`id_aspirasi` = '$id'") ;

		if($sel->num_rows == 0){
			danger("TIDAK ADA DATA!") ;
		}else{
			$sel2 = $act->selectFree("SELECT u.nama,a.id_aspirasi,a.judul,a.aspirasi,k.kategori,l.nama as lembaga,a.tgl_aspirasi FROM `merdeka_aspirasi` as a, `merdeka_user` as u, `merdeka_kategori` as k, `merdeka_lembaga` as l WHERE (a.lembaga_tujuan = l.id_lembaga AND a.kategori = k.id_kategori AND a.id_user = u.id) AND a.id_aspirasi = '$id'") ;
			$rows = $sel2->fetch_array() ;
		}
	}
?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<section class="panel">
			<header class="panel-heading">Detail Aspirasi</header>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th class="col-md-2">Judul</th>
						<th>Keterangan</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Judul Aspirasi</td>
						<td><?php echo $rows['judul'] ;?></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Pemberi Aspirasi</td>
						<td><?php echo $rows['nama'] ;?></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Tujuan Aspirasi</td>
						<td><?php echo $rows['lembaga'] ;?></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Kategori Aspirasi</td>
						<td><?php echo $rows['kategori'] ;?></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Tanggal Aspirasi</td>
						<td><?php echo dateConvert($rows['tgl_aspirasi']) ;?></td>
					</tr>
					<tr>
						<td>6</td>
						<td>Isi Aspirasi</td>
						<td><?php echo $rows['aspirasi'] ;?></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="2">
							<a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=index'?>" class="btn btn-info">Back to Home</a>
							<a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=delete&id='.$rows['id_aspirasi'] ;?>" class="btn btn-danger">Delete Aspirasi</a>
						</td>
					</tr>
				</table>
			</div>
		</section>
	</div>
</div>