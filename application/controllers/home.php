<?php
/**
 * Main page
 */
class Home extends CI_Controller
{
	/**
	 * Index page
	 */
	public function index() { $this->load->view('index'); }

	/**
	 * Products page
	 */
	public function products() { $this->load->view('Products/products'); }

	/**
	 * Mobile office
	 */
	public function mobileoffice() { $this->load->view('Products/Mobile/mobileoffice'); }

	/**
	 * CSV editor
	 */
	public function csveditor() { $this->load->view('Products/CSV/csveditor'); }

	/**
	 * Scan page
	 */
	public function scan() { $this->load->view('Products/Scan/scan'); }

	/**
	 * Label page
	 */
	public function label() { $this->load->view('Products/Label/label'); }

	/**
	 * Publish page
	 */
	public function publish() { $this->load->view('Products/Publish/publish'); }

	/**
	 * Support page
	 */
	public function support() { $this->load->view('Support/support'); }

	/**
	 * Mobile Office support page
	 */
	public function mobilesupport() { $this->load->view('Support/Mobile/mobilesupport'); }
    public function mobilemanual() { $this->load->view('Support/Mobile/manual'); }
    public function mobilephone() { $this->load->view('Support/Mobile/contact'); }
    public function mobilevideo() { $this->load->view('Support/Mobile/video'); }
    public function mobiledownload() { $this->load->view('support/Mobile/download'); }

	/**
	 * CSV Editor support page
	 */
	public function csvsupport() { $this->load->view('Support/CSV/csvsupport'); }
    public function csvmanual() { $this->load->view('Support/CSV/manual'); }
    public function csvphone() { $this->load->view('Support/CSV/contact'); }
    public function csvvideo() { $this->load->view('Support/CSV/video'); }
    public function csvdownload() { $this->load->view('support/CSV/download'); }

	/**
	 * Labels support page
	 */
	public function labelsupport() { $this->load->view('Support/Label/labelsupport'); }
    public function labelmanual() { $this->load->view('Support/Label/manual'); }
    public function labelphone() { $this->load->view('Support/Label/contact'); }
    public function labelvideo() { $this->load->view('Support/Label/video'); }
    public function labeldownload() { $this->load->view('support/Label/download'); }

	/**
	 * Scan support page
	 */
	public function scansupport() { $this->load->view('Support/Scan/scansupport'); }
    public function scanmanual() { $this->load->view('Support/Scan/manual'); }
    public function scanphone() { $this->load->view('Support/Scan/contact'); }
    public function scanvideo() { $this->load->view('Support/Scan/video'); }
    public function scandownload() { $this->load->view('support/Scan/download'); }

	/**
	 * Publish support page
	 */
	public function publishsupport() { $this->load->view('Support/Publish/publishsupport'); }
    public function publishmanual() { $this->load->view('Support/Publish/manual'); }
    public function publishphone() { $this->load->view('Support/Publish/contact'); }
    public function publishvideo() { $this->load->view('Support/Publish/video'); }
    public function publishdownload() { $this->load->view('support/Publish/download'); }

	/**
	 * Contact page
	 */
	public function contact() { $this->load->view('contact'); }

	/**
	 * Contact form submission
	 */
	public function contact_submission()
    {
		$email = $this->input->post('contact_email');
		$name = $this->input->post('contact_name');
		$phone = $this->input->post('contact_phone');
		$message = $this->input->post('contact_message');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules('contact_name', 'Name', 'required|trim|xss-clean');
		$this->form_validation->set_rules('contact_email', 'Email Address', 'required|trim|xss-clean|valid_email');
		$this->form_validation->set_rules('contact_phone', 'Phone Number', 'required|trim|xss-clean');
		$this->form_validation->set_rules('contact_message', 'Message', 'required|trim|xss-clean');

		if ($this->form_validation->run() == false)
        {
			$this->contact();
		}
        else
        {
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