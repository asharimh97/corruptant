<script src="<?php echo ASSETS ;?>js/highcharts.js"></script>
	<script src="<?php echo ASSETS ;?>js/highcharts-export.js"></script>
	<script>
	    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Data PDB dan Jumlah Warga Miskin 2014'
        },
        subtitle: {
            text: 'Sumber: <a href="https://data.go.id/">Data.go.id</a>'
        },
        xAxis: {
            categories : [
                <?php 
                    $prov = $act->selectAll("provinsi") ;
                    while($pro = $prov->fetch_object()){
                        echo "'".$pro->provinsi."'," ;
                    }
                ?>
            ] ,
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah PDB dan Warga Miskin',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: null
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                }
            }
        },
        credits: {
            enabled: false
        },
        series: [
            // data ke bawah untuk mengisi konten kategori
            // data ke samping merupakan datanya
            {
                name : 'PDB Per Provinsi (Dalam Rupiah)',
                data : [
                    <?php
                        $pdb = $act->selectAll("ekonomi") ;
                        while($row2 = $pdb->fetch_object()){
                            echo $row2->th_2014."," ;
                        }
                    ?>
                ]
            },
            {
                name : 'Jumlah Warga Miskin',
                data : [
                    <?php
                        $mis = $act->selectAll("kemiskinan") ;
                        while($row3 = $mis->fetch_object()){
                            echo $row3->th_2014."," ;
                        }
                    ?>
                ]
            }
        ]
    });
});
$(function () {
    $('#container2').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Data Indeks Pembangunan dan Keluhan Kesehatan'
        },
        subtitle: {
            text: 'Sumber: <a href="https://data.go.id/">Data.go.id</a>'
        },
        xAxis: {
            categories : [
                <?php 
                    $prov = $act->selectAll("provinsi") ;
                    while($pro = $prov->fetch_object()){
                        echo "'".$pro->provinsi."'," ;
                    }
                ?>
            ] ,
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah IPM dan Keluhan Kesehatan',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: null
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                }
            }
        },
        credits: {
            enabled: false
        },
        series: [
            // data ke bawah untuk mengisi konten kategori
            // data ke samping merupakan datanya
            {
                name : 'Indeks Pembangunan Manusia 2013',
                data : [
                    <?php
                        $ipm = $act->selectAll("ipm_prov") ;
                        while($rows = $ipm->fetch_object()){
                            echo $rows->th_2013."," ;
                        }
                    ?>
                ]
            },
            {
                name : 'Presentase Keluhan Kesehatan 2013',
                data : [
                    <?php
                        $kes = $act->selectAll("keluhan_kesehatan") ;
                        while($rows2 = $kes->fetch_object()){
                            echo $rows2->th_2013."," ;
                        }
                    ?>
                ]
            },
            {
                name : 'Presentase Keluhan Kesehatan 2014',
                data : [
                    <?php
                        $kes2 = $act->selectAll("keluhan_kesehatan") ;
                        while($rows3 = $kes2->fetch_object()){
                            echo $rows3->th_2014."," ;
                        }
                    ?>
                ]
            }
        ]
    });
});

	</script>
<section id="page-title" class="cvr2">
    <div class="container clearfix">
        <h1>PANTAU</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo BASEPATH ;?>">Depan</a></li>
            <li class="active">Pantau</li>
        </ol>
    </div>
</section>
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

        <h1>Keseluruhan Perkembangan</h1>

            <div class="col_full">
                Perkembangan Proyek di Indonesia merupakan suatu hal yang biasanya rawan terjadi korupsi. Maka dari itu, kami mencoba untuk menyajikan data data tentang proyek pembangunan yang ada di Indonesia. Sehingga orang dapat menilai sendiri, jika progress dari suatu proyek kurang dari target yang harus dicapai, maka perlu diselidiki lebih lanjut.
            </div>

            <div class="col_full">
                <div class="col-sm-6">
                    <div id="container" style="width:100%;height: 700px;margin: 0 auto;"></div>
                </div>
                <div class="col-sm-6">
                    <div id="container2" style="width:100%;height: 700px;margin: 0 auto;"></div>
                </div>
            </div>

            <div class="col_full">
                <div class="col-sm-6">
                    <h3>Provinsi Tersejahtera</h3>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama Provinsi</th>
                            <th>PDB Provinsi</th>
                        </tr>
                        <?php 
                            $sel = $act->selectOrder("ekonomi","`th_2014`"," DESC LIMIT 10") ;
                            $no = 1 ;
                            while ($sej = $sel->fetch_object()) {
                        ?>
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo strtoupper($sej->provinsi) ;?></td>
                            <td><?php echo number_format($sej->th_2014,2,",",".")?></td>
                        </tr>
                        <?php
                           $no++ ; }
                        ?>
                    </table>
                </div>
                <div class="col-sm-6">
                    <h3>Provinsi Garis Kemiskinan Tertinggi</h3>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama Provinsi</th>
                            <th>Jumlah Warga Miskin</th>
                        </tr>
                        <?php 
                            $mis2 = $act->selectOrder("kemiskinan","`th_2014`"," DESC LIMIT 10") ;
                            $no = 1 ;
                            while ($sho = $mis2->fetch_object()) {
                        ?>
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo strtoupper($sho->provinsi) ;?></td>
                            <td><?php echo number_format($sho->th_2014,2,",",".")." jiwa" ;?></td>
                        </tr>
                        <?php
                           $no++ ; }
                        ?>
                    </table>
                </div>
            </div>
            <div class="col_full">
                <h3>Program Pemerintah yang sedang berjalan</h3>
                Berikut adalah daftar-daftar pryoek pembangunan yang sedang berjalan di Indonesia.
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama Proyek</th>
                        <th>Kemajuan</th>
                        <th>Target Kemajuan</th>
                        <th>Instansi Penanggungjawab</th>
                    </tr>
                    <?php
                        $pro = $act->selectOrderWhere("proyek", "`progress`<100", "`tgl_mulai`", "DESC LIMIT 10") ;
                        if($pro->num_rows == 0)
                            dangerNo("TIDAK ADA DATA") ;
                        else{
                            $no = 1 ;
                            while($rows_pro = $pro->fetch_object()){
                    ?>
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><a href="<?php echo BASEPATH.'pantau/'.$rows_pro->id_proyek ;?>"><?php echo $rows_pro->nama_proyek ;?></a></td>
                            <td><?php echo $rows_pro->progress.'%' ;?></td>
                            <td><?php echo $rows_pro->progress.'%' ;?></td>
                            <?php 
                                $lemb = $act->selectWhere("lembaga", "`id_lembaga` = '".$rows_pro->lembaga."'") ;
                            ?>
                            <td><?php echo $lemb->fetch_object()->nama ;?></td>
                        </tr>
                    <?php
                            $no++ ;}
                        }
                    ?>
                </table>
            </div>

            <div class="clear"></div>

        </div>

    </div>

</section>