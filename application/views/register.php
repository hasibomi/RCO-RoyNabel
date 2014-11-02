<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<title>Register | RCO</title>
	
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
		<?= form_open('login/signup', 'class="form-signin" id="form-signup" autocomplete="off"'); ?>
		
			<?= form_input('company', '', 'placeholder="Company name" class="form-control"');?>
			<?= form_input(array('name' => 'fname', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'First name', 'required' => 'required')); ?>
			<?= form_input(array('name' => 'lname', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Last name', 'required' => 'required')); ?>
			<?= form_input(array('name' => 'new_email', 'class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email address', 'required' => 'required', 'id' => 'new_uname')); ?>
			<?= form_input(array('name' => 'new_password', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'required' => 'required', 'id' => 'pass')); ?>
			<div class="event">
				<?= form_input(array('name' => 'cpassword', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Confirm Password', 'required' => 'required', 'id' => 'cpass', 'onChange' => 'checker()')); ?>
			</div>
			
			<?= form_submit(array('name' => 'signup', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Register', 'id' => 'submit')); ?>
		
		<?= form_close(); ?>
		<!-- /#form-signup -->
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