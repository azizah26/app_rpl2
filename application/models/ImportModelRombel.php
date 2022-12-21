<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModelRombel extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('rombel', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('rombel')->result_array();
	}

}