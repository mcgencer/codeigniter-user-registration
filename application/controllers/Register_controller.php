<?php
class Register_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Register_model'); ///load model
	}

	public function index()
	{

		if($this->input->post('register'))
		{
		$fname=$this->input->post('fname');
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));

		$this->Register_model->insert_data($fname,$email,$password);

		

	}else{
	$this->load->view('registration_view');
	}
	}
}
?>