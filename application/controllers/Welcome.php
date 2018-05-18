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
        $this->load->helper(array('url'));
				$this->load->model(array('Model_insert','Model_data'));
    }
	public function index() {
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function pages($site) {
		$data = $this->Model_insert->getData('files');
		$this->load->view('header');
		$this->load->view($site, array('data' => $data));
		$this->load->view('footer');
	}
	public function gallery(){
		$this->load->database();
		$jumlah_data = $this->Model_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Welcome/gallery';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 16;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['files'] = $this->Model_data->data($config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('gallery',$data);
		$this->load->view('footer');
	}
	public function admin($site) {
		$this->load->view('header');
		$this->load->view('Admin/'.$site);
		$this->load->view('footer');
	}
  public function upload()
  {
      $config = array(
          'upload_path' => "./uploads/",
          'allowed_types' => "gif|jpg|png|jpeg|pdf",
          'overwrite' => TRUE,
          'max_size' => "5120000", //in bytes
          'max_height' => "10000",
          'max_width' => "10000"
      );
      $this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('userfile')) {
      	$error = array('error' => $this->upload->display_errors());

        // $this->load->view('upload_form', $error);
      } else {
				$data = $this->upload->data();
				$image['file_name'] = $data['file_name'];
				$this->Model_insert->insert_file('files',$image);
				redirect('admin');
      }
  }
}
