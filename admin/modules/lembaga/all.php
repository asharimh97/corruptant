<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">Data Semua Lembaga</header>
			<div class="panel-body">
				<table class="table">
					<thead>
						<th>No</th>
                        <th class="col-md-3">Nama Lembaga</th>
                        <th class="col-md-3">Alamat</th>
                        <th>Penanggung Jawab</th>
                        <th>Total Proyek</th>
                        <th>Aksi</th>
					</thead>
					<tbody>
						<?php 
                            $sel = $act->selectAll("lembaga") ;
                            if($sel->num_rows == 0){
                                dangerNo("Tidak ada data!") ;
                            }else{
                                $no = 1 ;
                                while($row = $sel->fetch_object()){
                        ?>
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><a href="<?php echo ADMIN.'index.php?modules=lembaga&actions=detail&id='.$row->id_lembaga ;?>"><?php echo $row->nama ;?></a></td>
                            <td><?php echo $row->alamat ;?></td>
                            <td><?php echo $row->pj ;?></td>
                            <td><?php echo $row->proyek ;?></td>
                            <td>
                                <a href="<?php echo ADMIN.'index.php?modules=lembaga&actions=detail&id='.$row->id_lembaga ;?>" class="btn btn-success btn-xs"><i class="icon-eye-open"></i></a>
                            </td>
                        </tr>
                        <?php
                               $no++; }
                            }
                        ?>
					</tbody>
				</table>
			</div>
		</section>
	</div>
</div>