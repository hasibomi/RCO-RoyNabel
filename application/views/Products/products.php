<?php $this->load->view('layout/header'); ?>

    <!-- Menu -->
    <?php $this->load->view('layout/menu'); ?>

    <!-- Page Content -->

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Products
                    <small>What We Produce</small>
                </h1>
            </div>

        </div>
        <!-- /.row -->

        <!-- Products -->

        <div class="row">
			
            <div class="row">
            
            	<div class="col-md-4 portfolio-item">
                	<img class="img-responsive" src="<?php echo base_url() ?>public/images/Mobile_state1_02.png">
                    <h3>Mobile Office</h3>
                    <p>A great way to use your iPhone and iPad to take customer orders or generate service bills. Collect time cards from multiple staff and ....</p>
                    <a class="btn btn-default btn-sm pull-right" href="<?php echo site_url('home/mobileoffice') ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
    
                <div class="col-md-4 portfolio-item">
                	<img class="img-responsive" src="<?php echo base_url() ?>public/images/csveditor.png">
                    <h3>CSV Editor</h3>
                    <p>CSV Editor creates and edits comma separated value (CSV) files which can be used to exchange information between software applications....</p>
                    <a class="btn btn-default btn-sm pull-right" href="<?php echo site_url('home/csveditor') ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <img class="img-responsive" src="<?php echo base_url() ?>public/images/Label_state1_02.png">
                    <h3>Labels</h3>
                    <p>Design ant label from photo id cards to shipping box labels, to wine labels or front and back labels. Add 1D or 2D barcodes for faster data entry....</p>
                    <a class="btn btn-default btn-sm pull-right" href="<?php echo site_url('home/label') ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <img class="img-responsive" src="<?php echo base_url() ?>public/images/Scan_state1_02.png">
                    <h3>Scan</h3>
                    <p>Service three description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea....</p>
                    <a class="btn btn-default btn-sm pull-right" href="<?php echo site_url('home/scan') ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <img class="img-responsive" src="<?php echo base_url() ?>public/images/Publish_state1_02.png">
                    <h3>Publish</h3>
                    <p>Service three description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea....</p>
                    <a class="btn btn-default btn-sm pull-right" href="<?php echo site_url('home/publish') ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
                
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<!-- Footer -->
<?php $this->load->view('layout/footer'); ?>