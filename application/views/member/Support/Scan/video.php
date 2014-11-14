<?php $this->load->view('member/layout/header'); ?>

    <!-- Menu -->
<?php $this->load->view('member/layout/menu'); ?>
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">Scan Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li>
                            <a href="<?= site_url('member/home/scansupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/Scan_state1_02.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/scanmanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/scanphone'); ?>">
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
                            <a href="<?= site_url('member/home/scanvideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/scandownload'); ?>">
                                <img src="<?= base_url(); ?>public/images/download.png" alt="" width="30" height="30"> Downloads
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Learn Scan</h3>
                        
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
                                		<td>Scan all your office paper and convert to searchable PDF files.</td>
                                		<td>4:29</td>
                                		<td><a href="https://www.youtube.com/watch?v=4ax-HxG-9lU">Video</a></td>
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
<?php $this->load->view('member/layout/footer'); ?>