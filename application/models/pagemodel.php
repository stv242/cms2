<?php

/**
 * test class
 */
class PageModel extends CI_Model {

	function __Construct()
	{
		parent::__Construct();
		$this->load->database();
	}
	
	function fetchAllRows($table)
	{
		$query = $this->db->get($table);
		if( $query->num_rows() > 0){
			return $query->result_array();
		}
	}
	
	function fetchRow($param, $field, $table)
	{
		$this->db->where($field, $param);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	
	function insertRow($table, $data)
	{
		$this->db->insert($table, $data);
	}
	
	function getNumRows($table)
	{
		return $this->db->count_all($table);
	}
}

?>