<?php
class Register_model extends CI_Model
{
	function insert_data($fname,$email,$password)
	{
	$query=$this->db->query("select * from users where (email='".$email."' or fname='".$fname."')");
		$row = $query->num_rows();
		if($row)
		{
		$data['message']="<h3 style='color:red'>Bu kullanıcı sistemde kayıtlı!</h3>";
		}
		else
		{
		$query=$this->db->query("insert into users set fname='$fname',email='$email',password='$password'");

		$message = "Üye Kaydı Başarılı";
		echo "<script> type='text/javascript'> alert('$message'); window.location.href='http://localhost/tekrar2/index.php/'; </script>";
		}

		$this->load->view('registration_view',@$data);
		}

	}