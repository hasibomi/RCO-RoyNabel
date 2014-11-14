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
            $this->load->view('member/Support/support');
        } else {
            redirect('home/');
        }
	}

	/**
	 * Mobile Office support page
	 */
    public function mobilesupport()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Mobile/mobilesupport');
        }
        else
        {
            redirect('home/');
		}
    }
    public function mobilemanual()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Mobile/manual');
        }
        else
        {
            redirect('home/');
		}
    }
    public function mobilephone()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Mobile/contact');
        }
        else
        {
            redirect('home/');
		}
    }
    public function mobilevideo()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Mobile/video');
        }
        else
        {
            redirect('home/');
		}
    }
    public function mobiledownload()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Mobile/download');
        }
        else
        {
            redirect('home/');
		}
    }

	/**
	 * CSV Editor support page
	 */
	public function csvsupport()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/CSV/csvsupport');
        }
        else
        {
            redirect('home/');
		}
    }
    public function csvmanual()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/CSV/manual');
        }
        else
        {
            redirect('home/');
		}
    }
    public function csvphone()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/CSV/contact');
        }
        else
        {
            redirect('home/');
		}
    }
    public function csvvideo()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/CSV/video');
        }
        else
        {
            redirect('home/');
		}
    }
    public function csvdownload()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/CSV/download');
        }
        else
        {
            redirect('home/');
		}
    }

    /**
	 * Labels support page
	 */
	public function labelsupport()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Label/labelsupport');
        }
        else
        {
            redirect('home/');
		}
    }
    public function labelmanual()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Label/manual');
        }
        else
        {
            redirect('home/');
		}
    }
    public function labelphone()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Label/contact');
        }
        else
        {
            redirect('home/');
		}
    }
    public function labelvideo()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Label/video');
        }
        else
        {
            redirect('home/');
		}
    }
    public function labeldownload()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Label/download');
        }
        else
        {
            redirect('home/');
		}
    }

	/**
	 * Scan support page
	 */
	public function scansupport()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Scan/scansupport');
        }
        else
        {
            redirect('home/');
		}
    }
    public function scanmanual()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Scan/manual');
        }
        else
        {
            redirect('home/');
		}
    }
    public function scanphone()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Scan/contact');
        }
        else
        {
            redirect('home/');
		}
    }
    public function scanvideo()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Scan/video');
        }
        else
        {
            redirect('home/');
		}
    }
    public function scandownload()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Scan/download');
        }
        else
        {
            redirect('home/');
		}
    }

	/**
	 * Publish support page
	 */
	public function publishsupport()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Publish/publishsupport');
        }
        else
        {
            redirect('home/');
		}
    }
    public function publishmanual()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Publish/manual');
        }
        else
        {
            redirect('home/');
		}
    }
    public function publishphone()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Publish/contact');
        }
        else
        {
            redirect('home/');
		}
    }
    public function publishvideo()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Publish/video');
        }
        else
        {
            redirect('home/');
		}
    }
    public function publishdownload()
    {
        if ($this->session->userdata('email') != "" || NULL != $this->session->userdata('email'))
        {
            $this->load->view('member/Support/Publish/download');
        }
        else
        {
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
    public function settings()
    {
        if ($this->session->userdata('email') == "" || NULL == $this->session->userdata('email'))
        {
            redirect('home/');
        }
        else
        {
            $this->load->view('member/settings');
        }
    }
	public function changePassword() {
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