<script src="<?php echo ADMIN ;?>assets/js/jquery.js"></script>
<script src="<?php echo ADMIN ;?>assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo ADMIN ;?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo ADMIN ;?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo ADMIN ;?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?php echo ADMIN ;?>assets/flatlab/jquery-knob/js/jquery.knob.js"></script>
<script src="<?php echo ADMIN ;?>assets/flatlab/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
<script src="<?php echo ADMIN ;?>assets/flatlab/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo ADMIN ;?>assets/flatlab/chart-master/Chart.js"></script>
<script src="<?php echo ADMIN ;?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo ADMIN ;?>assets/flatlab/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo ADMIN ;?>assets/js/owl.carousel.js" ></script>
<script src="<?php echo ADMIN ;?>assets/js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="<?php echo ADMIN ;?>assets/js/common-scripts.js"></script>

<!--script for this page-->
<script src="<?php echo ADMIN ;?>assets/js/sparkline-chart.js"></script>
<script src="<?php echo ADMIN ;?>assets/js/easy-pie-chart.js"></script>
<!-- Load JS Here -->
<script type="text/javascript">
	// knob
	$(".knob").knob() ;

    var Script = function () {
    var lineChartData = {
        labels : [
        	<?php 
        		$prov = $act->selectAll("provinsi") ;
        		while($pro = $prov->fetch_object()){
        			echo '"'.$pro->provinsi.'",' ;
        		}
        	?>
        ],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [
                <?php 
                	$mis = $act->selectAll("kemiskinan") ;
                	while($miss = $mis->fetch_object()){
                		echo $miss->th_2014."," ;
                	}
                ?>
                ]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [
                <?php 
                	$pdb = $act->selectAll("ekonomi") ;
                	while($pdbs = $pdb->fetch_object()){
                		echo $pdbs->th_2014."," ;
                	}
                ?>
                ]
            }
        ]

    };
    var lineChartData2 = {
        labels : [
        	<?php 
        		$prov = $act->selectAll("provinsi") ;
        		while($pro = $prov->fetch_object()){
        			echo '"'.$pro->provinsi.'",' ;
        		}
        	?>
        ],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [
                <?php 
                	$mis = $act->selectAll("ipm_prov") ;
                	while($miss = $mis->fetch_object()){
                		echo $miss->th_2013."," ;
                	}
                ?>
                ]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [
                <?php 
                	$pdb = $act->selectAll("keluhan_kesehatan") ;
                	while($pdbs = $pdb->fetch_object()){
                		echo $pdbs->th_2014."," ;
                	}
                ?>
                ]
            }
        ]

    };

    var myData = {
        labels: [
        	<?php 
        		$mypro = $act->selectWhere("lembaga", "`proyek` > 0") ;
        		while($showpro = $mypro->fetch_object()){
        			echo '"'.substr($showpro->nama,0,5).'...",' ;
        		}
        	?>
        ],
    datasets: [
        {
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [
            	<?php
            		$mypro2 = $act->selectWhere("lembaga", "`proyek` > 0") ;
	        		while($showpro2 = $mypro2->fetch_object()){
	        			echo $showpro2->proyek.',' ;
	        		}
            	?>
            ]
        }
    ]

    };

    var myData2 = {
        labels: [
        	<?php 
        		for($i=1;$i<=15;$i++){
        			echo '"Lorem Ipsum '.$i.'",' ;
        		}
        	?>
        ],
    datasets: [
        {
        	fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            data: [
            	413200000,8761299013,9870001123,4786000000,312400000,6754100000,126514900,12309878,876000123,531000000,6734000000,350000000,7512384901,348914678,65174209
            ]
        },
        {
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [
            	120000000,132000000,124300000,523000000,1200000000,9800000000,7650004320,120000000,132000000,124300000,523000000,1200000000,9800000000,7650004320,1498001230
            ]
        }
    ]

    };

    var dumbData = {
    	labels : [
    		"Total Proyek",
    		"Total Pengeluaran",
    		"Total Pemasukan",
    		"Kekayaan"
    	],
    	datasets : [
    	{

    		fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            data : [
            	25,
            	300,
            	276,
            	0
            ]
    	}
    	]
    };

    <?php 
    	if(!empty($_GET['modules']) && $_GET['modules'] == "provinsi" && $_GET['actions'] == "detail"){
    		extract($_GET) ;
    		$sel_pr = $act->selectFree("SELECT p.provinsi,p.id_provinsi,e.th_2014 as eko,e.th_2013 as eko2,i.th_2013 as ip,i.th_2012 as ip2,k.th_2014 as kes,k.th_2013 as kes2 ,m.th_2014 as mis,m.th_2013 as mis2 FROM `merdeka_provinsi` as p, `merdeka_ekonomi` as e, `merdeka_ipm_prov` as i, `merdeka_keluhan_kesehatan` as k, `merdeka_kemiskinan` as m WHERE (p.id_provinsi = e.id_provinsi AND i.id_provinsi = k.id_provinsi AND p.id_provinsi = i.id_provinsi AND p.id_provinsi = m.id_provinsi) AND p.id_provinsi = '".$id."'") ;
    		$pros = $sel_pr->fetch_array() ;
    		$mis = $pros['mis']/1000 ;
    		$mis2 = $pros['mis2']/1000 ;
    		$eko = $pros['eko']/1000 ;
    		$eko2 = $pros['eko2']/1000 ;
    ?>
    var lineChartData3 = {
        labels : ["PDB","IPM","Kemiskinan","Keluhan Kesehatan"],
        datasets : [
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [<?php echo $eko2.','.$pros['ip2'].','.$mis2.','.$pros['kes2']?>]
            },
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [<?php echo $eko.','.$pros['ip'].','.$mis.','.$pros['kes']?>]
            }
        ]

    };
    new Chart(document.getElementById("line4").getContext("2d")).Line(lineChartData3);
    <?php }?>
    
    <?php if(empty($_GET['modules']) || $_GET['modules'] == "proyek"){?>
    	new Chart(document.getElementById("line2").getContext("2d")).Line(myData);
    <?php }elseif(!empty($_GET['modules']) && $_GET['modules'] == "provinsi"){?>
    	new Chart(document.getElementById("line2").getContext("2d")).Line(lineChartData);
    <?php }elseif(!empty($_GET['modules']) && $_GET['modules'] == "lembaga" && $_GET['actions'] == "detail"){?>
    	new Chart(document.getElementById("line5").getContext("2d")).Line(dumbData);
    <?php }elseif (!empty($_GET['modules']) && $_GET['modules'] == "lembaga" && $_GET['actions'] == "index") {?>
    	new Chart(document.getElementById("line2").getContext("2d")).Line(myData2);
    <?php } ?>
    new Chart(document.getElementById("line3").getContext("2d")).Line(lineChartData2);

}();
</script>
</body>
</html>