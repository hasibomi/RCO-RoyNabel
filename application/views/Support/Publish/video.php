<?php $this->load->view('layout/header'); ?>

    <!-- Menu -->
<?php $this->load->view('layout/menu'); ?>
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">Publish Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li>
                            <a href="<?= site_url('home/publishsupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/Publish_state1_02.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/publishmanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/publishphone'); ?>">
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
                            <a href="<?= site_url('home/publishvideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/publishdownload'); ?>">
                                <img src="<?= base_url(); ?>public/images/download.png" alt="" width="30" height="30"> Downloads
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Learn Publish</h3>
                        
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
                                		<td>Overview</td>
                                		<td>Share files securely with your customrer. Your customers can upload files and you receive email alerts when new files arrive.</td>
                                		<td>4:09</td>
                                		<td><a href="https://www.youtube.com/watch?v=m_PzW0bLM8U">Video</a></td>
                                	</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- /.container -->
    </div>

    <!-- Footer -->
<?php $this->load->view('layout/footer'); ?>