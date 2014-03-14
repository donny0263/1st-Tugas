<?php 

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function login()
	{
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->library("session");
	}

	function index()
	{
		$this->load->view("login_view");
	}

	function prosesLogin()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$passwordx = md5($password);
		$q = $this->db->query("SELECT * FROM t_test where username='$username' AND userpass='$passwordx'");
		if ($q->num_rows()==1) 
		{
			$nama=$q->row()->username;
			$this->session->set_userdata('username',$nama);
			$data['welcome'] = "Welcome $nama";
			$this->load->view('welcome_view', $data);
		}else{
			$data['error']='!! Wrong Username or Password !!';
			$this->load->view('login_view', $data);
		}
	}

	function logout() 
	{
		$this->session->sess_destroy();
		$data['logout'] = 'You have been logged out.';
		$this->load->view('login_view', $data);
	}
}
?>