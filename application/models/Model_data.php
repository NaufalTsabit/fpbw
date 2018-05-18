<?php
class Model_data extends CI_Model{
	function data($number,$offset){
		return $query = $this->db->get('files',$number,$offset)->result();
	}

	function jumlah_data(){
		return $this->db->get('files')->num_rows();
	}
}
