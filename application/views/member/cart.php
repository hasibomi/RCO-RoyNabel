<?php $this->load->view('member/layout/header'); ?>

	<!-- Menu -->
	<?php $this->load->view('member/layout/menu'); ?>

	<br>
	<br>
	<br>

	<!-- Main content -->
	<div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Shopping cart</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Product name</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query = $this->db->get_where('orders', array('customer_id' => $this->session->userdata('id')));

								if ($query->num_rows() == 0) {
									echo '<tr class="alert-warning"><td colspan="4">Your cart is empty</td></tr>';
								}
								?>
								<?php
									foreach ($query->result() as $row) :
										?>
										<tr>
											<td><?php echo $row->product_name; ?></td>
											<td><?php echo $row->quantity; ?></td>
											<td><?php echo '$' . $row->price; ?></td>
											<td>
												<button id="<?php echo $row->id; ?>" class="btn btn-danger btn-sm">&times; Cancel</button>
											</td>
										</tr>
										<?php
									endforeach;
								?>
							</tbody>
						</table>
					</div>
					
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

	                    <!-- Identify your business so that you can collect the payments. -->
	                    <input type="hidden" name="business" value="business@newseller.com">
	
	                    <!-- Specify a Buy Now button. -->
	                    <input type="hidden" name="cmd" value="_xclick">
	
	                    <!-- Specify details about the item that buyers will purchase. -->
	                    <input type="hidden" name="item_name" value="<?php $query1 = $this->db->get_where('orders', array('customer_id' => $this->session->userdata('id'))); foreach ($query1->result() as $row1) {echo $row1->product_name . ', '; }?>">	                    
	                    <input type="hidden" id="amount" name="amount" value="<?php $this->db->select_sum('price'); $query2 = $this->db->get_where('orders', array('customer_id' => $this->session->userdata('id'))); foreach ($query2->result() as $row2) {echo $row2->price; }?>">
	                    <input type="hidden" name="currency_code" value="USD">
						<div class="col-md-offset-11">
		                    <!-- Display the payment button. -->
		                    <input type="image" id="main" name="submit" id="submit" border="0" src="<?= base_url(); ?>public/images/done.png" alt="PayPal - The safer, easier way to pay online">
		                    <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
	                    </div>
                	</form>

                	<?php
	                	echo '<form>';
	                		echo form_input(array('type' => 'hidden', 'id' => 'id', 'value' => $this->session->userdata('id')));

	                		echo form_button('delete', '', 'id="delete_btn" style="display: none;"');
	                	echo '</form>';
                	?>
				</div>
			</div>
		</div>
	</div>

<!-- Footer -->
<?php $this->load->view('member/layout/footer'); ?>