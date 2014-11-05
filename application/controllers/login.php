<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * Login page
	 */
	public function login_page() {
		$this->load->view('login');
	}

	/**
	 * Register page
	 */
	public function register() {
		$this->load->view('register');
	}
	 
	/**
	 * Validate credential for login
	 */
	public function validate_credentail() {
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|xss-clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false) {
			$this->login_page();
		} else {
			$this->load->model('user');

			$validate = new User;

			$validate->validate_credentail();
		}
	}
	  
	/**
	 * Sign up
	 */
	public function signup() {
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules('fname', 'First name', 'required|trim|xss-clean');
		$this->form_validation->set_rules('lname', 'Last name', 'required|trim|xss-clean');
		$this->form_validation->set_rules('new_email', 'Email', 'trim|required|valid_email|xss_clean|is_unique[user.email]');
		$this->form_validation->set_rules('company', 'Company name', 'trim|xss_clean|is_unique[user.company]');
		$this->form_validation->set_rules('new_password', 'Password', 'trim|required|xss-clean');
		$this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|xss-clean|matches[new_password]');

		if ($this->form_validation->run() == false) {
			$this->login_page();
		} else {
			$this->load->model('user');
			
			$signup = new User;
			
			$signup->sign_up();
		}
	}
	   
	/**
	 * Check username
	 */
	public function check_username() {
		$this->load->model('user');
		
		$user = new Login;
		
		if ($user->check_username() == true) {
			// Username does not exist
		} else {
			echo 'Username already has been taken';
		}
	}
		
	/**
	 * Email confirmation
	 */
	public function email_confirmation() {
	 	if ($this->input->get('email', true) != "" && $this->input->get('token', TRUE) != ""){
	 		$this->load->view('email_confirmation');
	 	} else {
	 		$this->login_page();
	 	}
	}

	/**
	 * Email validation
	 */
	public function email_validate() {
		if ($this->input->get('email', TRUE) != "" && $this->input->get('token', TRUE) != "") {
			$this->load->model('user');
		
			$email_validate = new User;
			
			$email_validate->email_validation();
			
			$this->load->view('email_validation');
		} else {
			$this->login_page();
		}
	}

	/**
	 * Email verification successful
	 */
	public function verification_successful() {
		if ($this->input->get('email', true) != "" && $this->input->get('token', true) != "") {
			$this->load->view('email_validation');
		} else {
			$this->login_page();
		}
	}

	/**
	 * Already verified
	 */
	public function already_verified() {
		if ($this->input->get('email', true) != "" && $this->input->get('token', true) != "") {
			$this->load->view('already_verified');
		} else {
			$this->login_page();
		}
	}

	/**
	 * Mobile office login
	 */
	public function mobileoffice() {
		$this->load->view('Products/Mobile/mobile_login');
	}

	/**
	 * Csv Editor login
	 */
	public function csveditor() {
		$this->load->view('Products/CSV/csv_login');
	}

	/**
	 * Label login
	 */
	public function label() {
		$this->load->view('Products/Label/label_login');
	}

	/**
	 * Scan login
	 */
	public function scan() {
		$this->load->view('Products/Scan/scan_login');
	}

	/**
	 * Publish login
	 */
	public function publish() {
		$this->load->view('Products/Publish/publish_login');
	}

	/**
	 * Validate credential for mobile office login
	 */
	public function validate_credentail_mobile() {
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|xss-clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false) {
			$this->login_page();
		} else {
			$this->load->model('user');

			$validate = new User;

			$validate->validate_credentail_mobile();
		}
	}

	/**
	 * Validate credential for Csv Editor login
	 */
	public function validate_credentail_csv() {
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|xss-clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false) {
			$this->login_page();
		} else {
			$this->load->model('user');

			$validate = new User;

			$validate->validate_credentail_csv();
		}
	}

	/**
	 * Validate credential for Label login
	 */
	public function validate_credentail_label() {
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|xss-clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false) {
			$this->login_page();
		} else {
			$this->load->model('user');

			$validate = new User;

			$validate->validate_credentail_label();
		}
	}

	/**
	 * Validate credential for Scan login
	 */
	public function validate_credentail_scan() {
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|xss-clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false) {
			$this->login_page();
		} else {
			$this->load->model('user');

			$validate = new User;

			$validate->validate_credentail_scan();
		}
	}

	/**
	 * Validate credential for Publish login
	 */
	public function validate_credentail_publish() {
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|xss-clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false) {
			$this->login_page();
		} else {
			$this->load->model('user');

			$validate = new User;

			$validate->validate_credentail_publish();
		}
	}
}