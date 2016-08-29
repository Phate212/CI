<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
;	}

	public function index()
	{
		$config = array(
			'protocol' => 'smtp',
			'mailtype' => 'html',
			'smptp_host' => 'ssl://smtp.google.com',
			'smtp_port' => '465',
			'smtp_user' => 'kpppondokaren@gmail.com',
			'smtp_pass' => 'pondokaren453'
		);

		$this->load->library('email');
		$this->email->set_newline('\r\n');
		
		$this->email->from('kpppondokaren@gmail.com', 'Pondok Aren');
		$this->email->to('phate212@mail.com');
		
		$this->email->subject('Email Test');
		$this->email->message('This is email test generated from CodeIgniter');
		
		if($this->email->send()) {
			echo "Email sent.";	
		} else {
			show_error($this->email->print_debugger());
		}
	}

}

/* End of file email.php */
/* Location: ./application/controllers/email.php */