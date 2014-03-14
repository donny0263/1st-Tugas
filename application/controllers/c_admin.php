<?php 

class C_admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view("v_login");
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if ($username=='superadmin' && $password='superadmin') 
		{
			$this->session->set_userdata("isLogin",true);
			redirect("c_admin/data");
		}else{
			$this->session->set_userdata("isLogin",false);
		}
	}

	function data()
	{
		$isLogin=$this->session->userdata('isLogin');
		if ($isLogin==false) 
		{
			redirect("c_admin/index");
		}

		$this->load->view("v_data");
	}

	function logout()
	{
		$this->session->unset_userdata("isLogin");
		redirect("c_admin/index");
	}
}

?>