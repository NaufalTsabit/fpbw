<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
				$this->load->model('Insert_model');
    }
	public function index() {
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function pages($site) {
		$data = $this->Insert_model->getData('files');
		$this->load->view('header');
		$this->load->view($site, array('data' => $data));
		$this->load->view('footer');
	}
  public function upload()
  {
      $config = array(
          'upload_path' => "./uploads/",
          'allowed_types' => "gif|jpg|png|jpeg|pdf",
          'overwrite' => TRUE,
          'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
          'max_height' => "768",
          'max_width' => "1024"
      );
      $this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('userfile')) {
      	$error = array('error' => $this->upload->display_errors());

        $this->load->view('upload_form', $error);
      } else {
				$data = $this->upload->data();
				$image['file_name'] = $data['file_name'];
				$this->db->insert('files', $image);
				redirect('admin');
      }
  }
}
