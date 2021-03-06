<?php $this->load->view('member/layout/header'); ?>

	<!-- Menu -->
    <?php $this->load->view('member/layout/menu'); ?>

    <br>
    <br>
    <br>

    <div class="container">

    	<div class="row">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Support | <a href="<?= base_url('support/index.php')?>" target="_blank">Help tickets</a></h3>
                </div>
                <div class="panel-body">
                
                	<div class="col-md-3">
	                    <!-- Nav tabs -->
	                    <ul class="nav nav-tabs nav-stacked nav-pills" role="tablist">
	                      <li class="active"><a href="#downloads" role="tab" data-toggle="tab">Downloads</a></li>
	                      <li><a href="#contact" role="tab" data-toggle="tab">Contact</a></li>
	                      <li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
	                    </ul>
                    </div>

					<div class="col-md-9">
	                    <!-- Tab panes -->
	                    <div class="tab-content">
	
	                        <div class="tab-pane active fade in" id="downloads">
	                            <div class="table-responsive">
	                                <table class="table table-hover table-striped">
	                                    <thead>
	                                        <tr>
	                                            <th>#</th>
	                                            <th>Size</th>
	                                            <th>File</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td>1</td>
	                                            <td>10mb</td>
	                                            <td><a href="http://www.rco.com/download/ultimategolf.zip">ultimategolf.zip</a></td>
	                                        </tr>
	                                        <tr>
	                                            <td>2</td>
	                                            <td>4mb</td>
	                                            <td><a href="http://www.rco.com/download/Bill%20for%20QuickBooks.msi">Bill for QuickBooks.msi</a></td>
	                                        </tr>
	                                        <tr>
	                                            <td>3</td>
	                                            <td>2mb</td>
	                                            <td><a href="http://www.rco.com/download/CSVEditorDistrib20140830.zip">QuickBooksSetupReadme.pdf</a></td>
	                                        </tr>
	                                        <tr>
	                                            <td>4</td>
	                                            <td>2mb</td>
	                                            <td><a href="http://www.rco.com/download/CSVEditorDistrib20140830.zip">CSVEditorDistrib20140830.zip</a></td>
	                                        </tr>
	                                        <tr>
	                                            <td>5</td>
	                                            <td>338mb</td>
	                                            <td><a href="http://www.rco.com/download/ALabelDistrib20140424.zip">ALabelDistrib20140424.zip</a></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                        <!-- /#downloads -->
	
	                        <div class="tab-pane fade" id="contact">
	                            <div class="col-md-6">
	                                <h3>Call RCO</h3>
	                                <p>
	                                    <i class="fa fa-phone"></i> 
	                                    <abbr title="Phone">Phone</abbr>: +1.310.451.3735
	                                </p>
	                                <p>
	                                    <i class="fa fa-phone"></i> 
	                                    <abbr title="Phone">Toll free</abbr>: 800.972.3027 (U.S. & Canada Only)
	                                </p>
	                                <h3>Business Hours</h3>
	                                <p>
	                                    <i class="fa fa-clock-o"></i> 
	                                    <abbr title="Hours">H</abbr>: 8:00am-5:00pm PST, Monday-Friday
	                                </p>
	                                <h3>Email Addresses</h3>
	                                <p>
	                                    <i class="fa fa-envelope-o"></i> 
	                                    <abbr title="Email">E</abbr>: 
	                                    <a href="mailto:royn@rco.com">Roy Nabel - royn@rco.com</a>
	                                </p>
	                            </div>
	                        </div>
	                        <!-- /#contact -->
	
	                        <div class="tab-pane fade" id="settings">
	                            <?php echo form_open('member/home/settings'); ?>
	
	                                <div class="form-group">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <?php echo $this->session->flashdata('event'); ?>
	                                        </div>
	                                    </div>
	                                </div>
	
	                                <div class="form-group">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <?php echo validation_errors(); ?>
	                                        </div>
	                                    </div>
	                                </div>
	
	                                <div class="form-group" id="event" style="display: none;">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <div class="alert alert-warning">
	                                                <center><b>Processing </b><img src="<?php echo base_url(); ?>public/images/loading.gif" alt="Loading"></center>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	
	                                <div class="form-group" id="call_back" style="display: none;">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <div class="alert alert-danger" id="call_message">
	                                                <!-- Call back message -->
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <?php echo form_password('password', '', 'placeholder="New password" id="new_pass" class="form-control"'); ?>
	                                        </div>
	                                    </div>
	                                </div>
	
	                                <div class="form-group">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <?php echo form_password('con_pass', '', 'placeholder="Confirm password" id="con_pass" class="col-md-5 form-control"'); ?>
	                                        </div>
	                                    </div>
	                                </div>
	
	                                <div class="form-group" id="message" style="display: none;">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <div class="alert alert-warning">
	                                                <center>
	                                                    <b>Please type your old password to make change</b>
	                                                </center>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	
	                                <div class="form-group" id="pre_pass" style="display: none;">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <?php echo form_password('pre_pass', '', 'placeholder="Your old password" id="old_pass" class="col-md-5 form-control"'); ?>
	                                        </div>
	                                    </div>
	                                </div>
	
	                                <div class="form-group">
	                                    <div class="row">
	                                        <div class="col-md-5 col-md-offset-2">
	                                            <button type="button" id="change" class="btn btn-block btn-lg btn-success">
	                                                Change
	                                            </button>
	                                            <?php echo form_submit('submit', 'Change', 'id="perform_change" class="btn btn-block btn-lg btn-success" style="display: none;"'); ?>
	                                        </div>
	                                    </div>
	                                </div>
	                            <?php echo form_close(); ?>
	                        </div>
	                    </div>
	                    <!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<!-- Footer -->
<?php $this->load->view('member/layout/footer'); ?>