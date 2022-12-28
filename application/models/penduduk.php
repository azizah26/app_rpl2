<?php
// Penduduk.php
class penduduk extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from statistik");
		return $data->result();
	}
	public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('siswa');
		if(!empty($keyword)){
			$this->db->like('nama',$keyword);
		}
		return $this->db->get()->result_array();
	}
 
}