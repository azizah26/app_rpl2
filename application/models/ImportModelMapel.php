<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModelMapel extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('mapel', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('mapel')->result_array();
	}

}