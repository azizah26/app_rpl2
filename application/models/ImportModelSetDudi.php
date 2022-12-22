<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModelSetDudi extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('set_dudi', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('set_dudi')->result_array();
	}

}