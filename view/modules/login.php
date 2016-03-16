<section id="page-title" class="cvr">
	<div class="container clearfix">
		<h1>MASUK</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo BASEPATH ;?>">Depan</a></li>
			<li class="active">Masuk</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<h3>Jadilah Warga Negara yang Aktif!</h3>
			<div class="col_full">
				<div class="col-sm-7">
					<h4>Daftar Corruptant!</h4>
					<form class="form-horizontal" role="signup" method="POST" action="<?php echo BASEPATH ;?>register">
					<div class="form-group">
						<label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
						<div class="col-sm-8">
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap Anda" required="required" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-8">
							<input type="text" name="user" id="username" class="form-control" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-8">
							<input type="password" name="pass" id="password" class="form-control" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="nik" class="col-sm-3 control-label">NIK</label>
						<div class="col-sm-8">
							<input type="number" name="nik" id="nik" class="form-control" placeholder="NIK Anda" required="required">
							<p class="small"><code>Anda dapat melihatnya di KK apabila belum punya KTP</code></p>
						</div>
					</div>
					<div class="form-group">
						<label for="ttl" class="col-sm-3 control-label">Tanggal Lahir</label>
						<div class="col-sm-8">
							<input type="date" name="ttl" id="ttl" class="form-control" placeholder="Tanggal Lahir Anda" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="gender" class="col-sm-3 control-label">Gender</label>
						<div class="col-sm-4">
							<select name="gen" id="gender" class="form-control">
								<option value="L">Laki-Laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="asal" class="col-sm-3 control-label">Asal</label>
						<div class="col-sm-8">
							<div class="col-sm-6">
								<select name="prov" id="asal" class="form-control">
									<option value="0"> - Pilih - </option>
									<?php 
										$prov = $act->selectAll("provinsi") ;
										while ($pro = $prov->fetch_object()) {
											echo '<option value="'.$pro->id_provinsi.'">'.$pro->provinsi.'</option>' ;
										}
									?>
								</select>
							</div>
							<div class="col-sm-6">
								<input type="text" name="kota" id="kota" class="form-control" placeholder="Kota Anda" required="required">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-3 control-label">Alamat</label>
						<div class="col-sm-8">
							<textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Anda Saat Ini" required="required"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="captcha" class="col-sm-3 control-label"><img src="<?php echo "view/inc/captcha.php?date=".date("YmdHis") ;?>"></label>
						<div class="col-sm-8">
							<input type="text" name="captcha" id="captcha" class="form-control" placeholder="Masukkan Kode Disamping" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-3">
							<input type="submit" value="Daftar!" class="btn btn-info">
						</div>
					</div>
				</form>
				</div>
				<!-- Login Form -->
				<div class="col-sm-5">
					<h4>Masuk ke Akun Anda</h4>
					<form class="form-horizontal" role="signup" method="POST" action="<?php echo BASEPATH ;?>verify">
					<div class="form-group">
						<label for="user" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-8">
							<input type="text" name="user" id="user" class="form-control" placeholder="Username/Email" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="pass" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-8">
							<input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-3">
							<input type="submit" value="Masuk!" class="btn btn-success">
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</section>