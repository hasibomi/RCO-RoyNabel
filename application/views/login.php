<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<title>User login | RCO</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" type="text/css" />
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/signin.css" type="text/css" />
	
	<!-- Icon -->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/images/icon.png" />
</head>
<body>

	<?php $this->load->view('layout/menu'); ?>
	
	<center>
		<img src="<?php echo base_url(); ?>/public/images/creation.png" alt="" class="form-signin-heading" />
		
		<br>
		<br>
	    <?= validation_errors(); ?>

	    <?= $this->session->flashdata('error'); ?>
	    
	    <?= $this->session->flashdata('event'); ?>
	</center>
	
	<br />
	<br />
	
	<div class="col-md-4 col-md-offset-4 panel panel-primary">
		<!-- Form start -->
		<?php echo form_open('login/validate_credentail', 'class="form-signin" id="form-login" autocomplete="off"')?>
		
			<?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required', 'autocomplete' => 'off')); ?>
			
			<?php echo form_input(array('type' => 'password', 'name' => 'password', 'placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')); ?>
			
			<?php echo form_submit(array('name' => 'submit', 'value' => 'Login', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
		
		<?php echo form_close(); ?>
		<!-- /#form-login -->
    </div>
    <!-- /.col-md-4.col-md-offset-4.panel.panel-primary -->
	
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" charset="utf-8">
		function checker() {
			var cpass = $(this).val(),
				pass = $('#pass').val();
				
			if (pass == cpass) {
				$('.event').removeClass('has-error').addClass('has-success');
			} else {
				$('.event').removeClass('has-success').addClass('has-error');
			}
		}
		
		$('#cpass').keyup(checker);
	</script>
	
</body>
</html>