<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<title>Email confirmed | RCO</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" type="text/css" />
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/signin.css" type="text/css" />
	
	<!-- Icon -->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/images/icon.png" />
</head>
<body>

	<?php $this->load->view('layout/menu'); ?>

	<br><br>

	<div class="col-md-10 col-md-offset-1 alert alert-success">
		<center>
			<h2>Thank you for registering. Please check click <a href="<?= site_url('login/login_page')?>">here</a> to login.</h2>
		</center>
	</div>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
	
</body>
</html>