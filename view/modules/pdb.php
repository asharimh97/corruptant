<script src="<?php echo ASSETS ;?>js/highcharts.js"></script>
	<script src="<?php echo ASSETS ;?>js/highcharts-export.js"></script>
	<script>
	    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Data PDB Tiap Provinsi per Tahun'
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
                text: 'Jumlah PDB Per Provinsi Per Tahun',
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
                name : 'Tahun 2012',
                data : [
                    <?php
                        $pdb3 = $act->selectAll("ekonomi") ;
                        while($row4 = $pdb3->fetch_object()){
                            echo $row4->th_2012."," ;
                        }
                    ?>
                ]
            },
            {
                name : 'Tahun 2013',
                data : [
                    <?php
                        $pdb2 = $act->selectAll("ekonomi") ;
                        while($row3 = $pdb2->fetch_object()){
                            echo $row3->th_2013."," ;
                        }
                    ?>
                ]
            },
            {
                name : 'Tahun 2014',
                data : [
                    <?php
                        $pdb = $act->selectAll("ekonomi") ;
                        while($row2 = $pdb->fetch_object()){
                            echo $row2->th_2014."," ;
                        }
                    ?>
                ]
            }
        ]
    });
});
</script>
<section id="page-title" class="cvr">
    <div class="container clearfix">
        <h1>STATISTIK PDB</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo BASEPATH ;?>">Depan</a></li>
            <li class="active">Statistik PDB</li>
        </ol>
    </div>
</section>
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

        <h1>Perkembangan PDB Tiap Provinsi</h1>

            <div class="col_full">
                <p class="text-justify">Berikut adalah data PDB setiap provinsi di Indonesia selama 3 tahun terakhir. Gunanya ada statistik ini adalah untuk menunjukkan provinsi mana saja yang 'seharusnya' lebih kaya dan lebih sejahtera. Dan apabila dalam praktiknya justru kelengkapan fasilitas dan pelayanannya berkurang namun PDB bertambah, Anda dapat melaporkannya kepada pemerintah melalui <strong>Corruptant!</strong></p>
            </div>

            <div class="col_full">
                <div class="col-sm-12">
                    <div id="container" style="width:100%;height: 700px;margin: 0 auto;"></div>
                </div>
            </div>

            <div class="clear"></div>

        </div>

    </div>

</section>