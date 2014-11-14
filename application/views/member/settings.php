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
                    <h2 class="panel-title">Settings</h2>
                </div>
                
                <div class="panel-body">
                    <?php echo form_open('member/home/changePassword'); ?>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
                                    <?php echo $this->session->flashdata('event'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
                                    <?php echo validation_errors(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="event" style="display: none;">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
                                    <div class="alert alert-warning">
                                        <center><b>Processing </b><img src="<?php echo base_url(); ?>public/images/loading.gif" alt="Loading"></center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="call_back" style="display: none;">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
                                    <div class="alert alert-danger" id="call_message">
                                        <!-- Call back message -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
                                    <?php echo form_password('password', '', 'placeholder="New password" id="new_pass" class="form-control"'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
                                    <?php echo form_password('con_pass', '', 'placeholder="Confirm password" id="con_pass" class="col-md-5 form-control"'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="message" style="display: none;">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
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
                                <div class="col-md-5 col-md-offset-4">
                                    <?php echo form_password('pre_pass', '', 'placeholder="Your old password" id="old_pass" class="col-md-5 form-control"'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
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