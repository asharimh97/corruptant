<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Jumlah Penduduk Miskin Vs PDB Provinsi Tahun 2014
            </header>
            <div class="panel-body text-center">
                <canvas id="line2" height="400" width="1000"></canvas>
            </div>
        </section>
    </div>
</div>
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
                Indeks Pembangunan Manusia vs Keluhan Kesehatan 2014
            </header>
            <div class="panel-body text-center">
                <canvas id="line3" height="400" width="1000"></canvas>
            </div>
        </section>
    </div>
</div>
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
                Data Perkembangan Provinsi Selama Tahun 2014
            </header>
            <div class="panel-body">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>No</th>
                        <th>Provinsi</th>
                        <th>PDB Tahun Lalu</th>
                        <th>IPM Tahun Lalu</th>
                        <th>Kemiskinan Tahun Lalu</th>
                        <th>Keluhan Kesehatan Tahun Lalu</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php 
                        $sel = $act->selectFree("SELECT p.provinsi,p.id_provinsi,e.th_2014 as eko,e.th_2013 as eko2,i.th_2013 as ip,i.th_2012 as ip2,k.th_2014 as kes,k.th_2013 as kes2 ,m.th_2014 as mis,m.th_2013 as mis2 FROM `merdeka_provinsi` as p, `merdeka_ekonomi` as e, `merdeka_ipm_prov` as i, `merdeka_keluhan_kesehatan` as k, `merdeka_kemiskinan` as m WHERE p.id_provinsi = e.id_provinsi AND i.id_provinsi = k.id_provinsi AND p.id_provinsi = i.id_provinsi AND p.id_provinsi = m.id_provinsi") ;
                        $no = 1 ;
                        while ($pro = $sel->fetch_array()) {
                    ?>
                    <tr>
                        <td><?php echo $no ;?></td>
                        <td><a href="<?php echo ADMIN.'index.php?modules=provinsi&actions=detail&id='.$pro['id_provinsi'] ;?>"><?php echo $pro['provinsi'] ;?></a></td>
                        <td><?php echo number_format($pro['eko'],2,",",".") ;?></td>
                        <td><?php echo $pro['ip'].'%' ;?></td>
                        <td><?php echo number_format($pro['mis'],2,",",".").' jiwa' ;?></td>
                        <td><?php echo $pro['kes'].'%' ;?></td>
                        <td>
                            <a href="<?php echo ADMIN.'index.php?modules=provinsi&actions=detail&id='.$pro['id_provinsi'] ;?>" class="btn btn-success btn-xs"><span class="icon-eye-open"></span></a>
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