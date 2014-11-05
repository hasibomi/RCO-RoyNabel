<?php $this->load->view('layout/header'); ?>

    <!-- Menu -->
<?php $this->load->view('layout/menu'); ?>
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">CSV Editor Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
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
                    <div class="col-md-9">
                        <h3 class="page-header">Learn CSV Editor</h3>
                        <div class="col-md-6">
                            <iframe class="img-responsive" src="//www.youtube.com/embed/mGb4R5rsAGA" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6">
                            <iframe class="img-responsive" src="//www.youtube.com/embed/mGb4R5rsAGA" frameborder="0" allowfullscreen></iframe>
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