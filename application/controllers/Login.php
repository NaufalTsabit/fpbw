<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> 497282e711ca0cebff03e4a905607f0761236d8d

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_login');

	}

	function index(){
<<<<<<< HEAD
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
=======
		$this->load->view('login');
>>>>>>> 497282e711ca0cebff03e4a905607f0761236d8d
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Model_login->cek_login("akun",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			redirect(base_url("login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
<<<<<<< HEAD
}
=======
}
>>>>>>> 497282e711ca0cebff03e4a905607f0761236d8d
