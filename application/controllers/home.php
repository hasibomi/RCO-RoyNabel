<?php
/**
* Main page
*/
class Home extends CI_Controller
{
	/**
	 * Index page
	 */
	public function index()
	{
		$this->load->view('index');
	}

	/**
	 * Products page
	 */
	public function products() {
		$this->load->view('products');
	}

	/**
	 * Mobile office
	 */
	public function mobileoffice() {
		$this->load->view('mobileoffice');
	}

	/**
	 * CSV editor
	 */
	public function csveditor() {
		$this->load->view('csveditor');
	}

	/**
	 * Scan page
	 */
	public function scan() {
		$this->load->view('scan');
	}

	/**
	 * Label page
	 */
	public function label() {
		$this->load->view('label');
	}

	/**
	 * Publish page
	 */
	public function publish() {
		$this->load->view('publish');
	}

	/**
	 * Support page
	 */
	public function support() {
		$this->load->view('support');
	}

	/**
	 * Contact page
	 */
	public function contact() {
		$this->load->view('contact');
	}

	/**
	 * Contact form submission
	 */
	public function contact_submission() {
		$email = $this->input->post('contact_email');
		$name = $this->input->post('contact_name');
		$phone = $this->input->post('contact_phone');
		$message = $this->input->post('contact_message');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules('contact_name', 'Name', 'required|trim|xss-clean');
		$this->form_validation->set_rules('contact_email', 'Email Address', 'required|trim|xss-clean|valid_email');
		$this->form_validation->set_rules('contact_phone', 'Phone Number', 'required|trim|xss-clean');
		$this->form_validation->set_rules('contact_message', 'Message', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false) {
			$this->contact();
		} else {
			$this->load->library('email');
			
			$this->email->from($email);
			$this->email->to('royn@rco.com');
			
			$this->email->subject('RCO - Contact Form Submission');
			$this->email->message($message);
			
			$this->email->send();

			$this->session->set_flashdata('success', '<div class="alert alert-success">Thank you</div>');

			redirect('home/contact');
		}
	}
}
?>