<?php $this->load->view('member/layout/header'); ?>

    <!-- Menu -->
    <?php $this->load->view('member/layout/menu'); ?>
    
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">CSV Editor Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li>
                            <a href="<?= site_url('member/home/csvsupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/csveditor.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/csvmanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/csvphone'); ?>">
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
                            <a href="<?= site_url('member/home/csvvideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= site_url('member/home/csvdownload'); ?>">
                                <img src="<?= base_url(); ?>public/images/download.png" alt="" width="30" height="30"> Downloads
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Download</h3>
                        <p><img src="<?= base_url(); ?>public/images/csveditor.png" ></p>
                        <a href="<?= base_url(); ?>public/download/CSVEditorDistrib20140902.zip">Download CSV Editor</a>
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
<?php $this->load->view('member/layout/footer'); ?>