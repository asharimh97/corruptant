<section id="page-title" class="cvr2">
    <div class="container clearfix">
        <h1>ASPIRASI</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo BASEPATH ;?>">Depan</a></li>
            <li class="active">Aspirasi</li>
        </ol>
    </div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
<?php 
	if(!empty($_SESSION['auth'])){
?>
			<h1 style="text-align:center">Wadah Dunia Untuk Perubahan</h1>
			<form id="msform" action="<?php echo BASEPATH.'sampaikan' ;?>" method="POST">
				<!-- progressbar -->
				<ul id="progressbar">
					<li class="active">Apa yang ingin kamu ubah?</li>
					<li>Siapa yang bisa membuat perubahan ini?</li>
					<li>Sampaikan ceritamu</li>
				</ul>
				<!-- fieldsets -->
				<fieldset>
					<h2 class="fs-title">Apa yang ingin kamu ubah?</h2>
					<h3 class="fs-subtitle">Deskripsikan perubahan spesifik yang kamu inginkan. Ini akan menjadi judul petisi yang bisa menceritakan isi secara singkat.</h3>
					<input type="text" name="ask" required="required" placeholder="Tulis sebuah judul.."/>
					<input type="button" name="next" class="next action-button" value="Lanjut" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Siapa yang bisa membuat perubahan ini?</h2>
					<h3 class="fs-subtitle">Penerima petisi ideal adalah yang memiliki kekuatan untuk memberikan perubahan yang kamu inginkan. Ini biasanya pejabat terpilih, badan pemerintah, atau pemimpin perusahaan.</h3>
					<input type="text" name="target" placeholder="Lembaga Yang Dituju" class="awesomplete" list="lembagaList" required="required"/>
					<datalist id="lembagaList">
						<?php 
							$slem = $act->selectOrder("lembaga", "`nama`", "ASC") ;
							while($shlem = $slem->fetch_object()){
								echo '<option value="'.$shlem->id_lembaga.'">'.$shlem->nama.'</option>' ;
							}
						?>
					</datalist>
					<select name="cat">
						<option value="0">Kategori Aspirasi</option>
						<?php 
							$cat = $act->selectAll("kategori") ;
							while ($scat = $cat->fetch_object()) {
								echo '<option value="'.$scat->id_kategori.'">'.$scat->kategori.'</option>' ;
							}
						?>
					</select>
					<select name="prov">
						<option value="0">Provinsi Tujuan</option>
						<?php 
							$sprov = $act->selectOrder("provinsi", "`provinsi`", "ASC") ;
							while($shprov = $sprov->fetch_object()){
								echo '<option value="'.$shprov->id_provinsi.'">'.$shprov->provinsi.'</option>' ;
							}
						?>
					</select>
					<input type="button" name="previous" class="previous action-button" value="Kembali" />
					<input type="button" name="next" class="next action-button" value="Lanjut" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Sampaikan ceritamu</h2>
					<h3 class="fs-subtitle">Jelasakan masalah yang kamu ingin selesaikan dan bagaimana perubahan ini berdampak bagimu, keluargamu, atau komunitasmu.</h3>
					<textarea required="required" style="height:80%" name="cerita"></textarea>
					<input type="button" name="previous" class="previous action-button" value="Kembali" />
					<input type="submit" name="kirim" class="submit action-button" value="Kirim" />
				</fieldset>
			</form>
<?php } ?>
			<div class="col_full">
				<div class="col-md-12">
				<h3>Data Seluruh Aspirasi Masyarakat</h3>
				<p>Dibawah ini merupakan data-data dari seluruh aspirasi masyarakat yang telah kami tampung. Terdapat beragam laporan dan data-data dari masyarakat. Harapannya, seluruh aspirasi ini dapat tersampaikan ke pihak yang terkait.</p>
					<table class="table table-striped table-hover">
						<tr>
							<th>No</th>
							<th class="col-md-3">Judul Aspirasi</th>
							<th>Pembuat Aspirasi</th>
							<th>Kategori</th>
							<th>Tanggal</th>
							<th>Pendukung</th>
							<?php 
								if(!empty($_SESSION['auth'])) echo '<th>Aksi</th>' ;
							?>
						</tr>
						<?php 
							$sel = $act->selectOrder("aspirasi", "`tgl_aspirasi`", "DESC") ;
							$no = 1 ;
							while($row = $sel->fetch_object()){
						?>
						<tr>
							<td><?php echo $no ;?></td>
							<td><a href="<?php echo BASEPATH.'data/'.$row->id_aspirasi ;?>"><?php echo $row->judul ;?></a></td>
							<td><?php 
							$us = $act->selectWhere("user","`id` = '".$row->id_user."'") ;
							echo $us->fetch_object()->nama ;
							?></td>
							<td><?php 
							$kat = $act->selectWhere("kategori","`id_kategori` = '".$row->kategori."'") ;
							echo $kat->fetch_object()->kategori ;
							?></td>
							<td><?php echo dateConvert($row->tgl_aspirasi) ;?></td>
							<td><?php echo $row->pendukung?></td>
							<?php 
								if(!empty($_SESSION['auth'])){
							?>
							<td>
							<?php 
								$user = $_SESSION['user'] ;
								$pass = $_SESSION['pass'] ;
								$use = $act->selectWhere("user", "`username` = '".$user."' AND `password` = '".$pass."'") ;
								$usid = $use->fetch_object()->id ;
								$duk = $act->selectWhere("dukungan_aspirasi", "`id_aspirasi` = '".$row->id_aspirasi."' AND `id_user` = '".$usid."'") ;

								if($duk->num_rows == 0){
							?>
								<a href="<?php echo BASEPATH.'dukung/'.$row->id_aspirasi ;?>" class="btn btn-success btn-sm">Dukung!</a>
							<?php }else{?>
								<button type="button" class="btn btn-success btn-sm" disabled="disabled">Telah Mendukung!</button>
							<?php }?>
							</td>
							<?php } ?>
						</tr>
						<?php
							$no++ ;}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>

</section>