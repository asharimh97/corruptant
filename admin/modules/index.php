<!--state overview start-->
  <div class="row state-overview">
	  <div class="col-lg-3 col-sm-6">
		  <section class="panel">
			  <div class="symbol terques">
				  <i class="icon-user"></i>
			  </div>
			  <div class="value">
				  <h1><?php 
					$us = $act->selectAll("user") ;
					echo $us->num_rows ;
				  ?></h1>
				  <p>Users</p>
			  </div>
		  </section>
	  </div>
	  <div class="col-lg-3 col-sm-6">
		  <section class="panel">
			  <div class="symbol yellow">
				  <i class="icon-shield"></i>
			  </div>
			  <div class="value">
				  <h1>
					<?php
						$cr = $act->selectAll("lembaga") ;
						echo $cr->num_rows ;
					?>
				  </h1>
				  <p>Lembaga Negara</p>
			  </div>
		  </section>
	  </div>
	  <div class="col-lg-3 col-sm-6">
		  <section class="panel">
			  <div class="symbol red">
				  <i class="icon-warning-sign"></i>
			  </div>
			  <div class="value">
				  <h1>
					<?php 
						$sf = $act->selectAll("proyek") ;
						echo $sf->num_rows ;
					?>
				  </h1>
				  <p>Proyek Berjalan</p>
			  </div>
		  </section>
	  </div>
	  <div class="col-lg-3 col-sm-6">
		  <section class="panel">
			  <div class="symbol blue">
				  <i class="icon-trophy"></i>
			  </div>
			  <div class="value">
				  <h1>
					<?php
						$us2 = $act->lastData("user", "`aspirasi`") ;
						echo substr($us2->fetch_object()->username,0,8) ;
					?>
				  </h1>
				  <p>Top User</p>
			  </div>
		  </section>
	  </div>
  </div>
  <!--state overview end-->
  <section class="panel">
  <div class="row" style="padding:20px 10px">
	  <div class="col-lg-6">
		  <!--custom chart start-->
		  <div class="border-head">
			  <h3>Grafik Aspirasi Masyarakat</h3>
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
	  <div class="col-lg-6">
		  <!--custom chart start-->
		  <div class="border-head">
			  <h3>Grafik Laporan Masyarakat</h3>
		  </div>
		  <div class="custom-bar-chart">
			  <div class="bar">
				  <div class="title">JAN</div>
				  <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">30%</div>
			  </div>
			  <div class="bar doted">
				  <div class="title">FEB</div>
				  <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
			  </div>
			  <div class="bar ">
				  <div class="title">MAR</div>
				  <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
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
				  <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
			  </div>
			  <div class="bar">
				  <div class="title">JUL</div>
				  <div class="value tooltips" data-original-title="65%" data-toggle="tooltip" data-placement="top">65%</div>
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
				  <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
			  </div>
		  </div>
		  <!--custom chart end-->
		  </div>
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
                Data Produktivitas Lembaga Negara
            </header>
            <div class="panel-body text-center">
                <canvas id="line2" height="400" width="1000"></canvas>
            </div>
        </section>
    </div>
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
                Indeks Pembangungan Manusia dengan Keluhan Kesehatan 2014
            </header>
            <div class="panel-body text-center">
                <canvas id="line3" height="400" width="1000"></canvas>
            </div>
        </section>
    </div>
  </div>
  </section>