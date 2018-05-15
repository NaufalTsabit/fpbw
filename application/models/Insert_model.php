<?php
class Insert_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function getData($table) {
		$res = $this->db->get($table);
		return $res->result_array();
	}

	function insert_file($table, $data) {
		$res = $this->db->insert($table,$data);
		return $res;
	}
}
