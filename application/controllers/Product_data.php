<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_data extends CI_Controller {
	public function index()
	{
	$satirlar=array();
        $satirlar["product"]=$this->db->get("product")->result();
        
	$this->load->view('product_list',$satirlar);
	}
}