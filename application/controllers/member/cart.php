<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	/**
	 * Shopping cart
	 */
	public function index() {
		if ($this->session->userdata('email') == "" || NULL == $this->session->userdata('email')) {
			redirect('home/');
		} else {
			$this->form_validation->set_error_delimiters('required', '<div class="alert alert-danger">', '</div>');

			$this->form_validation->set_message('required', 'You cheater!');

			$this->form_validation->set_rules('price', 'Price', 'required|xss-clean');
			$this->form_validation->set_rules('name', 'Name', 'required|xss-clean');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('member/cart');
			} else {
				$this->load->model('shopping_cart');

				$this->shopping_cart->checkout();
			}
		}
	}

	/**
	 * Delete cart
	 */
	public function delete_cart() {
		$query = $this->db->delete('orders', array('id' => $this->input->post('id')));

		if ($query) {
			echo 'Successfully deleted';
		} else {
			echo 'Error occured. Please try again';
		}
	}

	/**
	 * Restore shopping cart
	 */
	public function restore_cart() {
		$query = $this->db->delete('orders', array('customer_id' => $this->input->post('id')));

		if ($query) {
			echo "Success";
		} else {
			// Unsuccessfull
		}
	}
}