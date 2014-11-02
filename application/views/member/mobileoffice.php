<!-- Header -->
<?php $this->load->view('member/layout/header'); ?>
    
    <!-- Menu -->
    <?php $this->load->view('member/layout/menu'); ?>

    <?php
    $amount = 5;

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
                <h1 class="page-header">Mobile Office
                    <small>A great way to use your iPhone and iPad</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a>RCO</a>
                    </li>
                    <li><a>Products</a></li>
                    <li class="active">Mobile Office</li>
                </ol>
            </div>

        </div>

        <div class="row">
        	
        	<div class="col-md-offset-3 col-md-6">
    			<?= $this->session->flashdata('event');?>
    		</div>

            <div class="col-md-4">
                <img class="img-responsive" src="<?= base_url(); ?>public/images/mobile.png">
            </div>

            <div class="col-md-8">
                <h3>Description</h3>
                <p>
                    A great way to use your iPhone and iPad to take customer orders or generate service bills. Collect time cards from multiple staff and contract workers. Sychronizes with your Intuit Quickbooks accounting system and automatically generates invoices and vendor bills. Take all your office PDF documents with you on the road.
                </p>
                <p>
                    With Mobile Office say hello to light weight powerful mobile business software. Create invoices and take credit card payments all from your mobile devices while on the road. Review any of your office documents. Check your inventory stock levels at any of your stores or warehouses. Time and billing becomes a single click. You spend less time on accounting and more time with customers. Reports and the dashboard give you the data to help make informed decisions.
                </p>
                
                <h3>Price - $<?= (float) $amount; ?> user/month</h3>
                
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
                    <input type="hidden" name="item_name" value="Mobile Office">
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
                            <li>Seamless integration with your Intuit Quickbooks</li>
                            <li>Email invoices using Outlook, Gmail or Yahoo</li>
                            <li>Get paid with credit card</li>
                            <li>Generate client folder labels</li>
                            <li>Unlimited staff, client usage and NO CONTRACTS</li>
                        </ul>
                      </div>
                      <!-- /#details.tab-pane.active.fade.in -->
                      <div class="tab-pane fade" id="specs">
                        <div class="table-responsive">
                         <table class="table table-hover table-striped">
                           <tr>
                             <td style="background-color: #5d5145; color: white; width: 35%">Contact Manager</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Multiple Stores</td>
                             <td>Customer, Stocking & Vendors</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Non-Tracked Inventory</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Tracked Inventory</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Customer RMA’s</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Vendor RMA’s</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Invoice History</td>
                             <td style="background-color: #e5e5e5">Unlimited</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Invoice Photos</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Invoice Payments</td>
                             <td style="background-color: #e5e5e5">Credit Card, Cash, Check</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Payment Reader</td>
                             <td>Paypal</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Bluetooth Scanning</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Expenses</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Calendar</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Scheduling with Maps</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Stock Count</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Library Operations</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Box Operations</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Custom Reports</td>
                             <td>Unlimited</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Devices</td>
                             <td style="background-color: #e5e5e5">IOS Phones & IOS Tablets</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Encrypted Files</td>
                             <td>AES-256</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Inventory Dashborad</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Timecards</td>
                             <td>Vendor & Staff</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Accounting</td>
                             <td style="background-color: #e5e5e5">Quickbooks desktop & online</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Inventory Pick List</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Inventory Moves</td>
                             <td style="background-color: #e5e5e5">Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #917e69; color: white;">Shipping & Receiving</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td style="background-color: #5d5145; color: white;">Carrier Tracking</td>
                             <td style="background-color: #e5e5e5">UPS, FEDEX, DHL, USPS</td>
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
                <a href="<?php echo site_url('member/home/csveditor') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/csvedit.png">
                    <div class="col-md-offset-1">
                        <p>CSV Editor</p>
                    </div>
              </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/label') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/label_state.png">
                    <div class="col-md-offset-2">
                        <p>Label</p>
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