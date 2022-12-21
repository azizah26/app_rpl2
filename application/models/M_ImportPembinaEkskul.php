<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ImportPembinaEkskul extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('pembina_ekskul', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('pembina_ekskul')->result_array();
	}

}