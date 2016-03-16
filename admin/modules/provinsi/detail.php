<?php 
	if(!empty($id) && is_numeric($id)){		
		$sel = $act->selectFree("SELECT p.provinsi,p.id_provinsi,e.th_2014 as eko,e.th_2013 as eko2,i.th_2013 as ip,i.th_2012 as ip2,k.th_2014 as kes,k.th_2013 as kes2 ,m.th_2014 as mis,m.th_2013 as mis2 FROM `merdeka_provinsi` as p, `merdeka_ekonomi` as e, `merdeka_ipm_prov` as i, `merdeka_keluhan_kesehatan` as k, `merdeka_kemiskinan` as m WHERE (p.id_provinsi = e.id_provinsi AND i.id_provinsi = k.id_provinsi AND p.id_provinsi = i.id_provinsi AND p.id_provinsi = m.id_provinsi) AND p.id_provinsi = '".$id."'") ;
	}else{
		$act->alertBack("FORBIDDEN! Anda tidak bisa masuk!") ;
	}
	if($sel->num_rows == 1){
		$pro = $sel->fetch_array() ;
?>
<div class="row">
	<div class="col-md-6">
	<section class="panel">
		<header class="panel-heading">
			<h4><?php echo strtoupper($pro['provinsi'])?></h4>
		</header>
		<div class="panel-body">
			<table class="table table-hover">
				<tr>
					<th>No</th>
					<th>Keterangan</th>
					<th>Tahun 2013</th>
					<th>Tahun 2014</th>
				</tr>
				<tr>
					<td>1</td>
					<td>PDB</td>
					<td><?php echo number_format($pro['eko2'],2,",",".") ;?></td>
					<td><?php echo number_format($pro['eko'],2,",",".") ;?></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Indeks Pembangunan Manusia</td>
					<td><?php echo $pro['ip2']?></td>
					<td><?php echo $pro['ip']?></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Jumlah Warga Miskin</td>
					<td><?php echo number_format($pro['mis2'],2,",",".").' jiwa' ;?></td>
					<td><?php echo number_format($pro['mis'],2,",",".").' jiwa' ;?></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Jumlah Keluhan Kesehatan</td>
					<td><?php echo $pro['kes2']?></td>
					<td><?php echo $pro['kes']?></td>
				</tr>
			</table>
		</div>
	</section>
	</div>
	<div class="col-md-6">
		<section class="panel">
			<header class="panel-heading">
				<p>Data Dalam Grafik</p>
			</header>
			<div class="panel-body">
				<canvas id="line4" height="225" width="500"></canvas>
			</div>
		</section>
	</div>
</div>
<?php 
	}else{
		danger("TIDAK ADA DATA!") ;
	}
?>