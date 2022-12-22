<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModelEkskul extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('ekskul', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('ekskul')->result_array();
	}

}