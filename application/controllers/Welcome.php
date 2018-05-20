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
				$this->load->model(array('Model_insert','Model_data','Model_delete','Model_change','Model_update'));
				$this->load->library('form_validation');
    }
	public function index() {
		$data = $this->Model_insert->getData('data_kamera');
		$this->load->view('header');
		$this->load->view('index', array('data' => $data));
		$this->load->view('footer');
	}
	public function pages($site) {
		$data = $this->Model_insert->getData('files');
		$this->load->view('header');
		$this->load->view($site, array('data' => $data));
		$this->load->view('footer');
	}
	public function product($site) {
		$data = $this->Model_insert->getData('data_kamera');
		$this->load->view('header');
		$this->load->view($site, array('data' => $data));
		$this->load->view('footer');
	}
	public function camera(){
		$this->load->database();
		$jumlah_data = $this->Model_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Welcome/camera';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 16;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['files'] = $this->Model_data->data($config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('cars',$data);
		$this->load->view('footer');
	}
  public function upload($db)
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
				var_dump($error);
        // $this->load->view('upload_form', $error);
      } else {
				$data = $this->upload->data();
				$image['file_name'] = $data['file_name'];
				$this->Model_insert->insert_file($db,$image);
				redirect('admin');
      }
  }
	public function deleteimg($id) {
		$where = array('file_name'=>$id);
		unlink('uploads/'.$id);
		$result = $this->Model_delete->delete('files', $where);

		if($result >= 1) {
			redirect('admin');
		}
	}
	public function save_password() {
	  $this->form_validation->set_rules('new','New','required|alpha_numeric');
	  $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('Admin/change_pass');
			$this->load->view('footer');
  	} else {
   		$cek_old = $this->Model_change->cek_old();
   		if ($cek_old == False){
    		$this->session->set_flashdata('error','Old password not match!' );
    		$this->load->view('header');
    		$this->load->view('Admin/change_pass');
    		$this->load->view('footer');
   		} else {
    		$this->Model_change->save();
    		$this->session->set_flashdata('error','Your password success to change, please relogin !' );
		    redirect(base_url("admin"));
   		}//end if valid_user
  	}
 	}

	public function inputkamera() {
		$tipekamera = $this->input->post('tipekamera');
		$series = $this->input->post('series');
		$stock = $this->input->post('stock');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		$types = $this->input->post('types');
		$resol =  $this->input->post('resolusi');
		$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "5120000", //in bytes
				'max_height' => "10000",
				'max_width' => "10000"
		);
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('test')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			// $this->load->view('upload_form', $error);
		} else {
			$data = $this->upload->data();
			$image = $data['file_name'];
			$test = array(
				'merk' => $tipekamera,
				'seri' => $series,
				'format' => $types,
				'resolusi' => $resolusi,
				'stock' => $stock,
				'harga' => $harga,
				'deskripsi' => $deskripsi,
				'gambar' => $image
			);
			$result = $this->Model_insert->insert_file('data_kamera', $test);
			redirect('admin/admin/datakamera');
		}
	}

	public function delete($id) {
		$where = array('ID'=>$id);
		$result = $this->Model_delete->delete('data_kamera', $where);
		if($result >= 1) {
		redirect('admin/admin/datakamera');
		}
	}

	public function edit($id) {
		$where = array('id' => $id);
 		$data['data_kamera'] = $this->Model_update->edit($where,'data_kamera')->result();
		$this->load->view('header');
		$this->load->view('Admin/editkamera',$data);
		$this->load->view('footer');
	}
	public function update(){
		$id = $this->input->post('id');
 		$tipekamera = $this->input->post('tipekamera');
 		$series = $this->input->post('series');
 		$stock = $this->input->post('stock');
 		$harga = $this->input->post('harga');
 		$deskripsi = $this->input->post('deskripsi');
		$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "5120000", //in bytes
				'max_height' => "10000",
				'max_width' => "10000"
		);
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('test')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			// $this->load->view('upload_form', $error);
		} else {
			$data = $this->upload->data();
			$image = $data['file_name'];
			var_dump($data);
			$test = array(
				'merk' => $tipekamera,
				'seri' => $series,
				'stock' => $stock,
				'harga' => $harga,
				'deskripsi' => $deskripsi,
				'gambar' => $image
			);
		}

 		$where = array(
  		'id' => $id
 		);

 		$this->Model_update->update($where,$test,'data_kamera');
 		redirect('admin/admin/datakamera');
	}

	public function sendmail() {
        $from_email = "email@example.com";
        $to_email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        $this->load->view('contact');
    }
}
