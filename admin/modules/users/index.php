<section class="panel">
  <div class="row" style="padding:20px 10px">
	  <div class="col-lg-10 col-lg-offset-1">
		  <!--custom chart start-->
		  <div class="border-head">
			  <h3>Grafik Pendaftaran User</h3>
		  </div>
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
		  <!--custom chart end-->
	  </div>
</section>
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">
				<h4>Daftar Seluruh Pengguna</h4>
			</header>
			<div class="panel-body">
				<table class="table table-hover table-striped">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Email</th>
						<th>Aspirasi</th>
						<th>&nbsp;</th>
					</tr>
					<?php 
						$sel = $act->selectAll("user") ;
						if($sel->num_rows == 0){
							danger("Tidak Ada data!") ;
						}else{
							$no =1 ;
							while($rows = $sel->fetch_object()){

					?>
					<tr>
						<td><?php echo $no ;?></td>
						<td><?php echo $rows->nama ;?></td>
						<td><?php echo $rows->username ;?></td>
						<td><?php echo $rows->email ;?></td>
						<td><?php echo $rows->aspirasi ;?></td>
						<td>
							<a href="<?php echo ADMIN.'index.php?modules=users&actions=detail&id='.$rows->id ;?>" class="btn btn-success btn-xs"><span class="icon-eye-open"></span></a>
							<a href="<?php echo ADMIN.'index.php?modules=users&actions=delete&id='.$rows->id ;?>" class="btn btn-danger btn-xs"><span class="icon-trash"></span></a>
						</td>
					</tr>
					<?php $no++ ;}}?>
				</table>
			</div>
		</section>
	</div>
</div>