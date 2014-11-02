<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopping_cart extends CI_Model {
	/**
	 * Shopping cart
	 */
	public function checkout() {
		$data['customer_id'] = $this->session->userdata('id');
		$data['product_name'] = $this->input->post('name');
		$data['price'] = $this->input->post('price') * $this->input->post('quantity');
		$data['quantity'] = $this->input->post('quantity');

		$query = $this->db->insert('orders', $data);

		if ( $query ) {
			$this->session->set_flashdata('event', '<div class="alert alert-success"><center>Added to cart</center></div>');
			if ($this->input->post('name') == 'Mobile Office') {
				redirect('member/home/mobileoffice');
			} else if ($this->input->post('name') == 'CSV Editor') {
				redirect('member/home/csveditor');
			} else if ($data['product_name'] == 'Labels') {
				redirect('member/home/label');
			} else if ($data['product_name'] == 'Scan') {
				redirect('member/home/scan');
			} else if ($data['product_name'] == 'Publish') {
				redirect('member/home/publish');
			}
		} else {
			$this->session->set_flashdata('event', '<br /><br /><div class="alert alert-danger"><center>Error occured. Please try again</center></div>');
			
			if ($data['product_name'] == 'Mobile Office') {
				redirect('member/home/mobileoffice');
			} else if ($data['product_name'] == 'CSV Editor') {
				redirect('member/home/csveditor');
			} else if ($data['product_name'] == 'Labels') {
				redirect('member/home/label');
			} else if ($data['product_name'] == 'Scan') {
				redirect('member/home/scan');
			} else if ($data['product_name'] == 'Publish') {
				redirect('member/home/publish');
			}
		}
	}
}