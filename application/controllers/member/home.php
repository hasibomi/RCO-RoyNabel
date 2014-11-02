<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	/**
	 * Index page
	 */
	public function index() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/home');
		} else {
			redirect('home/');
		}
	}

	/**
	 * Logout
	 */
	public function logout() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->session->sess_destroy();
			redirect('home/');
		} else {
			redirect('home/');
		}
	}

	/**
	 * Products page
	 */
	public function products() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/products');
		} else {
		redirect('home/');
		}
	}

	/**
	 * Mobile office
	 */
	public function mobileoffice() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/mobileoffice');
		} else {
			redirect('home/');
		}
	}

	/**
	 * CSV editor
	 */
	public function csveditor() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/csveditor');
		} else {
			redirect('home/');
		}
	}

	/**
	 * Scan page
	 */
	public function scan() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/scan');
		} else {
			redirect('home/');
		}
	}

	/**
	 * Label page
	 */
	public function label() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/label');
		} else {
		redirect('home/');
		}
	}

	/**
	 * Publish page
	 */
	public function publish() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/publish');
		} else {
		redirect('home/');
		}
	}

	/**
	 * Support page
	 */
	public function support() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/support');
		} else {
		redirect('home/');
		}
	}

	/**
	 * Contact page
	 */
	public function contact() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/contact');
		} else {
		redirect('home/');
		}
	}

	/**
	 * Shopping cart page
	 */
	public function cart() {
		if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email')) {
			$this->load->view('member/cart');
		} else {
		redirect('home/');
		}
	}

	/**
	 * Settings
	 */
	public function settings() {
		if ($this->session->userdata('email') == "" || NULL == $this->session->userdata('email')) {
			redirect('home/');
		} else {
			$this->form_validation->set_error_delimiters('required', '<div class="alert alert-danger">','</div>');
			
			$this->form_validation->set_rules('password', 'New password', 'required|xss-clean|trim');
			$this->form_validation->set_rules('con_pass', 'Confirm password', 'required|xss-clean|trim|matches[password]');
			$this->form_validation->set_rules('pre_pass', 'Old password', 'required|xss-clean|trim');

			if ($this->form_validation->run() == FALSE) {
				$this->support();
			} else {
				$this->load->model('user');

				$this->user->settings();
			}
		}
	}
}