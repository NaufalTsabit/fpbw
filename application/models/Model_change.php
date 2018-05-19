<?php
class Model_change extends CI_Model{
  public function save() {
    $pass = $this->input->post('new');
    $data = array (
      'password' => $pass
    );
    $this->db->where('username', $this->session->userdata('nama'));
    $this->db->update('akun', $data);
  }
  //fungsi untuk mengecek password lama :
  public function cek_old() {
    $old = $this->input->post('old');
    $this->db->where('password',$old);
    $query = $this->db->get('akun');
    return $query->result();;
  }
}
