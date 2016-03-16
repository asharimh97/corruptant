<?php 
	require "../../lib/config.php" ;

	if(!empty($_SESSION['oauth'])){
		$act->redirAdmin("index.php") ;
	}
?>
<!DOCTYPE HTML>
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
	
	<!-- Bootstrap core CSS -->
    <link href="<?PHP echo ADMIN ;?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?PHP echo ADMIN ;?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?PHP echo ADMIN ;?>assets/flatlab/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?PHP echo ADMIN ;?>assets/css/style.css" rel="stylesheet">
    <link href="<?PHP echo ADMIN ;?>assets/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body">
	<div class="container">
		<form class="form-signin" action="<?php echo ADMIN."auth/login_verify.php"?>" method="POST">
        <h2 class="form-signin-heading"><p class="text-center"><img src="<?PHP echo ADMIN."assets/img/logo-wide.png" ;?>" alt="" style="max-width:300px;"></p></h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="user" placeholder="Username or Email" autofocus required="required">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            <input class="btn btn-lg btn-login btn-block" type="submit" value="Sign In">
            <p>or perharps you wanna <a href="<?PHP echo BASEPATH ;?>">Back to home?</a></p>

        </div>

      </form>
	</div>
</body>
</html>