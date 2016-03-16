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

	<title>Corruptant!</title>

	<!-- Load The CSS Below -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo ASSETS ;?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ASSETS ;?>/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ASSETS ;?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ASSETS ;?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ASSETS ;?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ASSETS ;?>css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ASSETS ;?>css/multi-step-form.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ;?>css/awesomplete.css">
	<link rel="stylesheet" href="<?php echo ASSETS ;?>css/responsive.css" type="text/css" />

	<!-- Load the javascript below -->
	<script type="text/javascript" src="<?php echo ASSETS ;?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS ;?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS ;?>js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS ;?>js/awesomplete.js"></script>
<?php
	if(!empty($_GET['page']) && $_GET['page'] == "aspirasi"){
?>
	<script>
	$(document).ready(function(){
		//jQuery time

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return true ;
})

});
</script>
<?php } ?>

</head>
<body class="stretched">
<div id="wrapper" class="clearfix">
<?php 
	if(empty($_GET['page']) || $_GET['page'] == "home"){
?>
	<header id="header" class="transparent-header dark full-header no-sticky">
<?php }else{?>
	<header id="header" class="full-header">
<?php }?>
		<div id="header-wrap">

			<div class="container clearfix">

				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="<?php echo BASEPATH ;?>" class="standard-logo" data-dark-logo="<?php echo ASSETS ;?>img/logo-dark.png"><img src="<?php echo ASSETS ;?>img/logo.png" alt="Canvas Logo"></a>
					<a href="<?php echo BASEPATH ;?>" class="retina-logo" data-dark-logo="<?php echo ASSETS ;?>img/logo-dark@2x.png"><img src="<?php echo ASSETS ;?>img/logo@2x.png" alt="Canvas Logo"></a>
				</div><!-- #logo end -->

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu">
					<ul>
						<li><a href="<?php echo BASEPATH ;?>"><div>Home</div></a>
						<li><a href="<?php echo BASEPATH; ?>pantau"><div>Pantau</div></a>
						<li><a href="<?php echo BASEPATH ;?>pdb"><div>Statistik PDB</div></a>
						<li><a href="<?php echo BASEPATH ;?>aspirasi"><div>Aspirasi</div></a>
						<?php if(empty($_SESSION['auth'])) {?>
							<li><a href="<?php echo BASEPATH ;?>login">Masuk</a></li>
						<?php }else{ ?>
							<li><a href="<?php echo BASEPATH ;?>logout">Keluar</a></li>
						<?php } ?>
					</ul>

					<!-- Top Search
					============================================= -->
					<div id="top-search">
						<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
						<form action="<?php echo BASEPATH ;?>search" method="POST">
							<input type="text" name="s" class="form-control" value="" placeholder="Ketikkan &amp; Tekan Enter..">
						</form>
					</div><!-- #top-search end -->

				</nav><!-- #primary-menu end -->

			</div>

		</div>

	</header><!-- #header end -->