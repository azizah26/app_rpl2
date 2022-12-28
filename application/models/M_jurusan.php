<?php
class M_jurusan extends CI_Model{
function get_data(){
return $this->db->get('jurusan');
}

public function ambil_data($keyword=null){
    $this->db->select('*');
    $this->db->from('jurusan');
    if(!empty($keyword)){
        $this->db->like('kd_jurusan',$keyword);
    }
    return $this->db->get()->result_array();
}

function insert_data($data,$table){
$this->db->insert($table,$data);
}

function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
}

function edit_data($where,$table){
    return $this->db->get_where($table,$where);
}

function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
    }

    
}