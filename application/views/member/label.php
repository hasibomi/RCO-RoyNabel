<?php $this->load->view('member/layout/header'); ?>

    <!-- Menu -->
    <?php $this->load->view('member/layout/menu'); ?>

    <?php
    $amount = 10;

    if (NULL != $this->input->post('submit_coupon')) {
      $discount5 = 5;
      $discount10 = 10;

      if ($this->input->post('coupon') == 'take5discount') {
        (float) $amount = $amount - (($amount * $discount5) / 100);
      } else if ($this->input->post('coupon') == 'take10discount') {
        (float) $amount = $amount - (($amount * $discount5) / 100);
      }
    }
    ?>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Labels
                  <small>Add QR barcodes for you marketing campaigns and ads</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a>RCO</a>
                    </li>
                    <li><a>Products</a></li>
                    <li class="active">Labels</li>
                </ol>
            </div>

        </div>

        <div class="row">
        	
        	<div class="col-md-offset-3 col-md-6">
    			<?= $this->session->flashdata('event');?>
    		</div>

            <div class="col-md-4">
                <img class="img-responsive" src="<?= base_url(); ?>public/images/label.png">
            </div>

            <div class="col-md-8">
                <h3>Description</h3>
                <p>Design ant label from photo id cards to shipping box labels, to wine labels or front and back labels. Add 1D or 2D barcodes for faster data entry processing. Comes witd artist created labels. Add QR barcodes for you marketing campaigns and ads. Use plain CSV files or connect to Oracle database. Print letter labels witd postnet barcode.</p>
                
                <h3>Price - $<?php echo (float)$amount; ?></h3>

                <br>

                <?php echo form_open(current_url()); ?>
                  <?php echo form_label('Coupon', 'coupon'); ?>
                  <?php echo form_input('coupon', ''); ?>
                  <?php echo form_submit('submit_coupon', 'Submit'); ?>
                <?php echo form_close(); ?>
                
                <br>

                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="business" value="royn@rco.com"> <!-- E7AALCJKE2PLN -->
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="item_name" value="Labels">
                  <input type="hidden" name="amount" value="<?php echo (float) $amount; ?>">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="button_subtype" value="products">
                  <input type="hidden" name="add" value="1">
                  <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>

        </div>
        
        <br>
        <br>
        <br>
        
        <div class="row">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <!--<h3 class="panel-title">Title</h3>-->
                </div>
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#details" role="tab" data-toggle="tab">DETAILS</a></li>
                      <li><a href="#specs" role="tab" data-toggle="tab">SPECS</a></li>
                      <li><a href="#reviews" role="tab" data-toggle="tab">REVIEWS</a></li>
                      <li><a href="#videos" role="tab" data-toggle="tab">VIDEOS</a></li>
                      <li><a href="#qa" role="tab" data-toggle="tab">Q & A</a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                    
                      <div class="tab-pane active fade in" id="details">
                        <ul>
                            <li>Vector drawing tools (rectangles, stars, lines, arrows)</li>
                            <li>Rotate or scale objects</li>
                            <li>1D & 2D barcodes (PDF417 and QR codes)</li>
                            <li>Reads CSV or Oracle database</li>
                            <li>Print a series of labels witd serial numbers</li>
                        </ul>
                      </div>
                      <!-- /#details.tab-pane.active.fade.in -->
                      <div class="tab-pane fade" id="specs">
                        <div class="table-responsive">
                      		<table class="table table-hover table-bordered table-striped">
                            <tr>
                              <td style="background-color: #5d5145; color: white; width: 35%">Vector Drawing</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Database</td>
                              <td>Text, Oracle</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">1-D Barcodes</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">2-D Barcodes</td>
                              <td>PDF417, QR</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Ruler</td>
                              <td style="background-color: #e5e5e5">Metric, English</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Envelopes</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Mailing Lists</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Templates</td>
                              <td>100+</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Label Definitions</td>
                              <td style="background-color: #e5e5e5">3000+</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Serial Numbers</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Block Text</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Pictures</td>
                              <td>JPG, BMP, GIF, PNG</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Color Maps</td>
                              <td style="background-color: #e5e5e5">Infinite</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Rotation</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Drawing Tools</td>
                              <td style="background-color: #e5e5e5">Multiple</td>
                            </tr>
                          </table>
                      	</div>
                      </div>
                      <!-- /#specs.tab-pane.fade-->
                      <div class="tab-pane fade" id="reviews">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
                      <!-- /#reviews.tab-pane.fade -->
                      <div class="tab-pane fade" id="videos">
                          <a href="http://www.youtube.com/embed/6xGVKAVCwII?autoplay=1" class="fancybox fancybox.iframe">
                              <img src="<?= base_url(); ?>public/images/road_m.jpg" alt="">
                          </a>
                          <a href="http://www.youtube.com/embed/6xGVKAVCwII?autoplay=1" class="fancybox fancybox.iframe">
                              <img src="<?= base_url(); ?>public/images/road_m.jpg" alt="">
                          </a>
                      </div>
                      <!-- /#videos.tab-pane.fade -->
                      <div class="tab-pane fade" id="qa">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
                      <!-- /#qa.tab-pane.fade -->
                      
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel.panel-primary -->
            
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Products</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/mobileoffice') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/mobile_office.png">
                    <div class="col-md-offset-1">
                        <p>Mobile office</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/csveditor') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/csvedit.png">
                    <div class="col-md-offset-1">
                        <p>CSV Editor</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/scan') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/scan_state.png">
                    <div class="col-md-offset-2">
                        <p>Scan</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/publish') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/publish_state.png">
                    <div class="col-md-offset-2">
                        <p>Publish</p>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <!-- /.container -->

<?php $this->load->view('member/layout/footer'); ?>