<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModelFromRapot extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('from_rapot', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('from_rapot')->result_array();
	}

}