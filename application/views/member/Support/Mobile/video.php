<?php $this->load->view('member/layout/header'); ?>

    <!-- Menu -->
<?php $this->load->view('member/layout/menu'); ?>
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">Mobile Office Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li>
                            <a href="<?= site_url('member/home/mobilesupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/mobile_office.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/mobilemanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/mobilephone'); ?>">
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
                            <a href="<?= site_url('member/home/mobilevideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/mobiledownload'); ?>">
                                <img src="<?= base_url(); ?>public/images/download.png" alt="" width="30" height="30"> Downloads
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Learn Mobile Office</h3>
                        
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
                                		<td>Technicians</td>
                                		<td>Automate your workforce using smart phones or tables (android and apple). Generate invoices, track expenses, optimal job route, track inventory, time and billing, and synchronize to QuickBooks. Call 310-451-3735 for more information or to watch a demo.</td>
                                		<td>1:00</td>
                                		<td><a href="https://www.youtube.com/watch?v=KQnmLfohk0I">Video</a></td>
                                	</tr>
                                    <tr>
                                		<td>Inventory</td>
                                		<td>RCO Inventory lets you do inventory using an ipad and bluetooth scanner.</td>
                                		<td>5:00</td>
                                		<td><a href="https://www.youtube.com/watch?v=Rk_BfCb9nJY">Video</a></td>
                                	</tr>
                                    <tr>
                                		<td>Invoices</td>
                                		<td>Keep working when out of the office using Mobile Office. Get paid with credit cards, generate invoices, record your time and billing and sync to Quickbooks</td>
                                		<td>8:07</td>
                                		<td><a href="https://www.youtube.com/watch?v=38x1rhbeXTs">Video</a></td>
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