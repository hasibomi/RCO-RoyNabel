<?php $this->load->view('layout/header'); ?>

    <!-- Menu -->
    <?php $this->load->view('layout/menu'); ?>
    
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">Mobile Office Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li>
                            <a href="<?= site_url('home/mobilesupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/mobile_office.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/mobilemanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/mobilephone'); ?>">
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
                        <li>
                            <a href="<?= site_url('home/mobilevideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= site_url('home/mobiledownload'); ?>">
                                <img src="<?= base_url(); ?>public/images/download.png" alt="" width="30" height="30"> Downloads
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Download</h3>
                        <p><img src="<?= base_url(); ?>public/images/mobile_office.png" ></p>
                        <a href="<?= base_url(); ?>public/download/Bill For QuickBooks.msi">Download Mobile Office</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.container-fluid -->

    <!-- Footer -->
<?php $this->load->view('layout/footer'); ?>