<div class="row">
    <div class="col-lg-12">
        <!--<section class="panel">
            <header class="panel-heading">
                Quarterly Apple iOS device unit sales
            </header>
            <div class="panel-body">
                <div id="hero-area" class="graph"></div>
            </div>
        </section> -->
        <section class="panel">
            <header class="panel-heading">
                Pemasukan dan Pengeluaran Tiap Lembaga Per Tahun
            </header>
            <div class="panel-body text-center">
                <canvas id="line2" height="400" width="1000"></canvas>
            </div>
            <div class="panel-footer">
                <p>Keterangan : 
                <p>
                    <div style="width:20px;height:20px;background:rgba(220,220,220,1) ;float :left;"></div>Pengeluaran Tiap Lembaga
                </p>
                <p>
                    <div style="width:20px;height:20px;background:rgba(151,187,205,1) ;float :left;"></div>Pemasukan Tiap Lembaga
                </p>
                </p>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">Top 10 Lembaga</header>
            <div class="panel-body">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lembaga</th>
                            <th>Alamat</th>
                            <th>Penanggung Jawab</th>
                            <th>Total Proyek</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sel = $act->selectOrderWhere("lembaga", "`proyek` >= 0", "`proyek`", "DESC LIMIT 10") ;
                            if($sel->num_rows == 0){
                                dangerNo("Tidak ada data!") ;
                            }else{
                                $no = 1 ;
                                while($row = $sel->fetch_object()){
                        ?>
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $row->nama ;?></td>
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
                    <tfoot>
                        <tr>
                            <td colspan="6"  class="text-right"><a href="<?php echo ADMIN.'index.php?modules=lembaga&actions=all' ;?>" class="btn btn-info btn-sm">Lihat semua data lembaga...</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </div>
</div>