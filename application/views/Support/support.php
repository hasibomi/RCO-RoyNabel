<?php $this->load->view('layout/header'); ?>

	<!-- Menu -->
    <?php $this->load->view('layout/menu'); ?>

    <div class="container">
		
		<div class="row">
			<div class="col-md-11">
	    		<h1 class="page-header">Welcome to RCO Support <small>Get support from us</small> </h1>
	    		<p>Learn about RCO products, view online manuals, get the latest downloads, and more. Please call us at 800-972-3027 toll free </p>
	    		<p>in the United States or 310-451-3735.</p>
	    	</div>
	    	<div class="col-md-1">
	    		<a href="<?= base_url('support/index.php')?>" target="_blank">
					<img src="<?= base_url()?>public/images/helpicon.png" class="img-responsive" width="50" height="50" alt="Help" style="margin-top: 10%;">
	    		</a>
	    	</div>
    	</div> <!-- /.row -->

    	<div class="row">
    		<div class="col-md-12">
    			<div class="portfolio-item">
    				<div class="row">
    					<div class="col-md-4">
    						<a href="<?= site_url('home/mobilesupport')?>">
    							<img class="img-responsive" src="<?php echo base_url() ?>public/images/Mobile_state1_02.png">
    						</a>
    						<h4 id="mobileoffice"><a href="<?= site_url('home/mobilesupport')?>" class="custom-a">Mobile Office</a></h4>
    					</div> <!-- /.col-md-4 -->
    					<div class="col-md-4">
    						<a href="<?= site_url('home/csvsupport')?>">
    							<img class="img-responsive" src="<?php echo base_url() ?>public/images/csveditor.png">
    						</a>
    						<h4 id="csv"><a href="<?= site_url('home/csvsupport')?>" class="custom-a">CSV Editor</a></h4>
    					</div> <!-- /.col-md-4 -->
    					<div class="col-md-4">
    						<a href="<?= site_url('home/labelsupport')?>">
    							<img class="img-responsive" src="<?php echo base_url() ?>public/images/Label_state1_02.png">
    						</a>
    						<h4 id="labels"><a href="<?= site_url('home/labelsupport')?>" class="custom-a">Labels</a></h4>
    					</div> <!-- /.col-md-4 -->
    				</div> <!-- /.row -->

    				<br>
    				<br>
    				<br>

    				<div class="row">
    					<div class="col-md-4">
    						<a href="<?= site_url('home/scansupport')?>">
    							<img class="img-responsive" src="<?php echo base_url() ?>public/images/Scan_state1_02.png">
    						</a>
    						<h4 id="scan"><a href="<?= site_url('home/scansupport')?>" class="custom-a">Scan</a></h4>
    					</div> <!-- /.col-md-4 -->
    					<div class="col-md-4">
    						<a href="<?= site_url('home/publishsupport')?>">
    							<img class="img-responsive" src="<?php echo base_url() ?>public/images/Publish_state1_02.png">
    						</a>
    						<h4 id="publish"><a href="<?= site_url('home/publishsupport')?>" class="custom-a">Publish</a></h4>
    					</div> <!-- /.col-md-4 -->
    				</div> <!-- /.row -->
    			</div> <!-- /.portfolio-item -->
    		</div> <!-- /.col-md-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<!-- Footer -->
<?php $this->load->view('layout/footer'); ?>