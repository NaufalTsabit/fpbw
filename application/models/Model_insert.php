<?php
class Model_insert extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function getData($table) {
		$this->db->from($table);
		$this->db->order_by("id","desc");
		$res = $this->db->get();
		return $res->result_array();
	}

	function insert_file($table, $data) {
		$res = $this->db->insert($table, $data);
		return $res;
	}
}
