<?php
	if(empty($_SESSION['auth'])){
?>
<!-- Modal Daftar -->
<div class="modal fade" id="signup" role="dialog" aria-labelledby="signup">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="signupLabel">Jadilah Penggiat Anti Korupsi!</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="signup">
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
						<div class="col-sm-8 col-sm-offset-3">
							<input type="submit" value="Daftar!" class="btn btn-info btn-sm">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php }?>