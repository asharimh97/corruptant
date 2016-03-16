<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Corruptant! Sebuah aplikasi pemantauan perekonomian di Indonesia!">
	<meta name="author" content="SIS Squad 2015">
	<meta name="copyright" content="SIS Squad">
	<meta name="keywords" content="Koruptor, Korupsi, Anti Korupsi, Pemantauan, Pemerintah">

	<title>Administrator Corruptant!</title>

	<!-- Load CSS here -->
	<link rel="stylesheet" type="text/css" href="<?php echo ADMIN ;?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ADMIN ;?>assets/css/bootstrap-reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ADMIN ;?>assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ADMIN ;?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ADMIN ;?>assets/css/style-responsive.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo ADMIN ;?>assets/flatlab/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ADMIN ;?>assets/flatlab/jquery-easy-pie-chart/jquery.easy-pie-chart.css">
	<link href="<?php echo ADMIN ;?>assets/flatlab/morris.js-0.4.3/morris.css" rel="stylesheet" />
</head>
<body>
<section id="container" class="">
<!--header start-->
<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="#" class="logo">CORRUPT<span>ANT</span></a>
    <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-comment"></i>
                        <?php 
                        	$n_as = $act->selectOrder("aspirasi", "`tgl_aspirasi`", "DESC LIMIT 7") ;

                        ?>
                            <span class="badge bg-success"><?php echo $n_as->num_rows ;?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Aspirasi Terbaru</p>
                            </li>
                            <?php 
                            	while($no_as = $n_as->fetch_object()){
                            ?>
                            <li>
                                <a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=detail&id='.$no_as->id_aspirasi ;?>">
                                    <span class="subject">
                                    <span class="from"><?php $usid = $no_as->id_user; $uside = $act->selectWhere("user", "`id` = '$usid'") ; echo $uside->fetch_object()->nama ;?></span>
                                    </span>
                                    <span class="message">
                                        <?php echo $no_as->judul ;?>
                                    </span>
                                </a>
                            </li>
                            <?php 
                            	}
                            ?>
                            <li>
                                <a href="<?php echo ADMIN ;?>index.php?modules=aspirasi&actions=index">Lihat Semua</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
    <!--logo end-->
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="<?php echo ADMIN ;?>assets/img/default.png">
                    <span class="username">Admin</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="<?php echo ADMIN ;?>logout.php"><i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--header end-->
