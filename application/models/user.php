<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
	/**
	 * Check username
	 */
	public function check_username() {
		$email = $this->input->post('new_email');

		$query = $this->db->get_where('user', array('new_email' => $email));

		if ($query) {
			return false;
		} else {
			return true;
		}
	}

	/**
	 * Validate credential
	 */
	public function validate_credentail() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->db->get_where('user', array('email' => $email, 'password' => $password, 'active' => 1));

		if ($query->num_rows() == 1) {
			$row = $query->row();

			$this->session->set_userdata(array('email' => $row->email, 'id' => $row->id, 'is_loged_in' => true));
			redirect('member/home/');
		} else {
			$this->session->set_flashdata('error', '<p class="alert alert-danger">Wrong email or password</p>');
			redirect('login/validate_credentail');
		}
	}
	
	 /**
	  * Sign Up
	  */
	public function sign_up() {
		$data['company'] = $this->input->post('company');
	  	$data['fname'] = $this->input->post('fname');
		$data['lname'] = $this->input->post('lname');
		$data['email'] = $this->input->post('new_email');
		$data['password'] = md5($this->input->post('new_password'));
		$data['active'] = 0;
		$data['token'] = md5(uniqid(rand()));

		$query = $this->db->insert('user', $data);
		
		if ($query) {
			$this->load->library('email');
			$this->email->from('support@rco.com');
			$this->email->to($data['email']);

			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';

			$this->email->initialize($config);

			
			// $this->email->set_mailtype('html');
			
			$this->email->subject('Email confirmation - RCO');

			// $message = "<html>";
			// $message = "<body>";
			/*$message = "Thank you for registering. Please click the link to validate
			http://www.rco.com/login/email_validate?email=$data[email]&token=$data[token]";*/
			/*<html>
			<head>
				<title></title>
			</head>
			<body>
				<p> </p>
				<p><a href=""'.$data['email'].'"&token="'..'">Validate email</a></p>
			</body>
			</html>';*/
			// $message = ";
			// $message.= "";
			// $message.= "</body>";
			// $message.= "</html>";

			/*$message = '<html>';
			$message.= '<body>';
			$message.= '<p>Thank you for registering. Please click the link to validate</p>';
			$message.= '<a href="http://www.rco.com/login/email_validate?email='.$data['email'].'&token='.$data['token'].'">Validate email</a>';
			$message.= '</body>';
			$message.= '</html>';*/

			$message = "http://www.rco.com/login/email_validate?email=$data[email]&token=$data[token]";

			$this->email->message($message);
			
			$this->email->send();

			// echo $this->email->print_debugger();

			// redirect('login/email_confirmation?email='.$data['email'].'&token='.$data['token']);
		} else {
			$this->session->set_flashdata('event', '<p class="alert alert-danger">Error occured. Please try after sometime.</p>');
			redirect('login/signup');
		}
	}
	
	/**
	 * Email validation
	 */
	public function email_validation() {
	   	$email = $this->input->get('email', true);
		$token = $this->input->get('token', true);
		
		$query = $this->db->get_where('user', array('email' => $email, 'token' => $token, 'active' => 0));
		
		if ($query->num_rows() == 1) {
			$this->db->set('active', 1);
			$this->db->where(array('email' => $email, 'token' => $token, 'active' => 0));
			$this->db->update('user');
			
			$this->session->set_flashdata('success', '<p class="alert alert-success">Email has been verified</p>');

			redirect('login/verification_successful?email='.$email.'&token='.$token);
		} else {
			redirect('login/already_verified?email='.$email.'&token='.$token);
		}
	}

	/**
	 * Validate credential for mobile office
	 */
	public function validate_credentail_mobile() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->db->get_where('user', array('email' => $email, 'password' => $password, 'active' => 1));

		if ($query->num_rows() == 1) {
			$row = $query->row();

			$this->session->set_userdata(array('email' => $row->email, 'id' => $row->id, 'is_loged_in' => true));
			redirect('member/home/mobileoffice');
		} else {
			$this->session->set_flashdata('error', '<p class="alert alert-danger">Wrong email or password</p>');
			redirect('login/validate_credentail');
		}
	}

	/**
	 * Validate credential for CSV Editor
	 */
	public function validate_credentail_csv() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->db->get_where('user', array('email' => $email, 'password' => $password, 'active' => 1));

		if ($query->num_rows() == 1) {
			$row = $query->row();

			$this->session->set_userdata(array('email' => $row->email, 'id' => $row->id, 'is_loged_in' => true));
			redirect('member/home/csveditor');
		} else {
			$this->session->set_flashdata('error', '<p class="alert alert-danger">Wrong email or password</p>');
			redirect('login/validate_credentail');
		}
	}

	/**
	 * Validate credential for label
	 */
	public function validate_credentail_label() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->db->get_where('user', array('email' => $email, 'password' => $password, 'active' => 1));

		if ($query->num_rows() == 1) {
			$row = $query->row();

			$this->session->set_userdata(array('email' => $row->email, 'id' => $row->id, 'is_loged_in' => true));
			redirect('member/home/label');
		} else {
			$this->session->set_flashdata('error', '<p class="alert alert-danger">Wrong email or password</p>');
			redirect('login/validate_credentail');
		}
	}

	/**
	 * Validate credential for scan
	 */
	public function validate_credentail_scan() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->db->get_where('user', array('email' => $email, 'password' => $password, 'active' => 1));

		if ($query->num_rows() == 1) {
			$row = $query->row();

			$this->session->set_userdata(array('email' => $row->email, 'id' => $row->id, 'is_loged_in' => true));
			redirect('member/home/scan');
		} else {
			$this->session->set_flashdata('error', '<p class="alert alert-danger">Wrong email or password</p>');
			redirect('login/validate_credentail');
		}
	}

	/**
	 * Validate credential for publish
	 */
	public function validate_credentail_publish() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->db->get_where('user', array('email' => $email, 'password' => $password, 'active' => 1));

		if ($query->num_rows() == 1) {
			$row = $query->row();

			$this->session->set_userdata(array('email' => $row->email, 'id' => $row->id, 'is_loged_in' => true));
			redirect('member/home/publish');
		} else {
			$this->session->set_flashdata('error', '<p class="alert alert-danger">Wrong email or password</p>');
			redirect('login/validate_credentail');
		}
	}

	/**
	 * Settings
	 */
	public function settings() {
		$pre_password = md5($this->input->post('pre_pass'));
		$password = md5($this->input->post('password'));
		$id = $this->session->userdata('id');

		$this->db->select('id');
		$this->db->select('password');

		$query = $this->db->get_where('user', array('id' => $id, 'password' => $pre_password));

		if ($query->num_rows() == 1) {
			$this->db->set(array('password' => $password));
			$this->db->where('id', $id);

			$update = $this->db->update('user');

			if ($update) {
				$this->session->set_flashdata('event', '<div class="alert alert-success"><center>Your password has been changed successfully</center></div>');
				redirect('member/home/settings');
			} else {
				$this->session->set_flashdata('event', '<div class="alert alert-danger"><center>Error occured. please try after sometime</center></div>');
				redirect('member/home/settings');
			}
		} else {
			$this->session->set_flashdata('event', '<div class="alert alert-danger"><center>You provided <b>wrong password</b></center></div>');
			redirect('member/home/settings');
		}
	}
}