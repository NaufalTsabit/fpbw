<?php

class Logout extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_log');
	}
	function index(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
