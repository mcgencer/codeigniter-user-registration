<?php
class Product_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Product_model'); ///load model
	}

	public function index()
	{

		if($this->input->post('urunekle'))
		{
		$pname=$this->input->post('pname');
		$padet=$this->input->post('padet');
		$pkategori=$this->input->post('pkategori');
		$modelno=$this->input->post('modelno');

		$this->Product_model->insert_data($pname,$padet,$pkategori,$modelno);

	}else{
	$this->load->view('product_page');
	}
	}
}
?>