<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_log');

		if($this->session->userdata('status') == "login"){
			redirect(base_url("admin"));
		}
	}

	function index(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Model_log->cek_login("akun",$where)->num_rows();
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
}
