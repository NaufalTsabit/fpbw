<?php

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_insert');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data = $this->Model_insert->getData('files');
    $this->load->view('header');
		$this->load->view('Admin/admin', array('data' => $data));
    $this->load->view('footer');
	}
}
