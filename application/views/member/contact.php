<?php $this->load->view('member/layout/header'); ?>

    <!-- Menu -->
    <?php $this->load->view('member/layout/menu'); ?>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact 
          	<small>We'd Love to Hear From You! </small>
            <small><a href="http://rco.uservoice.com/forums/266263-general/" target="_blank">Feedback</a></small>
          </h1>
          
          <ol class="breadcrumb">
            <li><a>RCO</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>

      </div><!-- /.row -->
      
      
	    <?php  
	
		// check for a successful form post  
		if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
		  
		        // check for a form error  
		elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  
	
	    ?>
      
      <div class="row">
      	<div class="col-md-4 alert alert-warning" style="color: #000000; margin-left: 1.2%">
          <h3>Call RCO</h3>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">Phone</abbr>: +1.310.451.3735</p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">Toll free</abbr>: 800.972.3027 (U.S. & Canada Only)</p>
          <br />
        </div>
      </div>
      
      <div class="row">

        <div class="col-sm-6">
          <h3>Business Hours</h3>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: 8:00am-5:00pm PST, Monday-Friday</p>

          <h3>Mailing Address</h3>
          <p>RCO Services Inc</p>
          <p>2170 Georgina Avenue</p>
          <p>Santa Monica, CA 90402 USA</p>

          <h3>Email Addresses</h3>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:royn@rco.com">Roy Nabel - royn@rco.com</a></p>

          <h3>Our offices are closed on the following dates:</h3>
          <p>July 4th - Independence Day</p>
          <p>September 5th - Labor Day</p>
          <p>November 24th & 25th - Thanksgiving</p>
          <p>December 26th - Christmas</p>
          <p>January 2nd - New Year's Day</p>
          
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>        

        <div class="col-sm-12">
          <h3>Let's Get In Touch!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	            </div>
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	            </div>
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	            </div>
	            <div class="row">
	              <div class="clearfix"></div>
	            </div>
	            <div class="row">
	              <div class="form-group col-lg-6">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	            </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

<!-- Footer -->
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/uservoice.js"></script>
<?php $this->load->view('member/layout/footer'); ?>
