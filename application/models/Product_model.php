<?php
class Product_model extends CI_Model
{
	function insert_data($pname,$padet,$pkategori,$modelno)
	{
	$query=$this->db->query("select * from product where (pname='".$pname."')");
		$row = $query->num_rows();
		if($row)
		{
		$data['message']="<h3 style='color:red'> Bu ürün daha önce sisteme eklenmiş!</h3>";
		}
		else
		{
		$query=$this->db->query("insert into product set pname='$pname',padet='$padet',pkategori='$pkategori',modelno='$modelno'");

		$message = "Kayıt Başarılı";
		echo "<script> type='text/javascript'> alert('$message'); window.location.href='http://localhost/tekrar2/index.php/home'; </script>";
				
		}

		$this->load->view('product_page',@$data);
		}

	}