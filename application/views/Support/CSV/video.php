<?php $this->load->view('layout/header'); ?>

    <!-- Menu -->
<?php $this->load->view('layout/menu'); ?>
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">CSV Editor Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-2 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li>
                            <a href="<?= site_url('home/csvsupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/csveditor.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/csvmanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/csvphone'); ?>">
                                <img src="<?= base_url(); ?>public/images/phone.png" width="30" height="30" >
                                Contact Support
                            </a>
                        </li>
                        <li>
                            <a href="http://www.rco.com/support/index.php">
                                <img src="<?= base_url(); ?>public/images/helpicon.png" width="30" height="30" >
                                Help Ticket
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= site_url('home/csvvideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Learn CSV Editor</h3>
                        
                        <div class="table-responsive">
                        	<table class="table table-condensed table-striped table-hover">
                            	<thead>
                                	<tr>
                                		<th>Title</th>
                                		<th>Description</th>
                                		<th>Time (min:sec)</th>
                                		<th>YouTube</th>
                                	</tr>
                                </thead>
                                
                                <tbody>
                                	<tr>
                                		<td>Getting Started</td>
                                		<td>CSVEditor has many functions that help you work with csv files. If you have to clean up data for a conversion or create test data files you will appreciate all the functions like detecting duplicates or creating random names or number sequences.</td>
                                		<td>2:52</td>
                                		<td><a href="https://www.youtube.com/watch?v=NWqr4qNve1w">Video</a></td>
                                	</tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
             </div>
          </div>
            <br>
            <br>
      </div>
        <!-- /.container -->

    <!-- Footer -->
<?php $this->load->view('layout/footer'); ?>