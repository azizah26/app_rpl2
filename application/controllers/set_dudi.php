<?php
class set_dudi extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('m_set_dudi');
$this->load->model('M_dudi');
$this->load->model('M_kelas');
}

public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
       
        $data['set_dudi'] = $this->m_set_dudi->get_data('set_dudi')->result();
		$this->load->view('set_dudi/v_set_dudi',$data);
        $this->load->view('template/footer');
	}
function tambah(){
    $data['dudi'] = $this->M_dudi->get_data('dudi')->result();
    $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('set_dudi/v_tambah_set_dudi',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $id = $this->input->post('id');
        $id_setdudi = $this->input->post('id_setdudi');
        $nama_pembimbing = $this->input->post('nama_pembimbing');
        $nama_jurusan = $this->input->post('nama_jurusan');
        $data = array(
        'id' => $id,
        'id_setdudi' => $id_setdudi,
        'nama_pembimbing' => $nama_pembimbing,
        'nama_jurusan' => $nama_jurusan
        );
        $this->m_set_dudi->insert_data($data,'set_dudi');
        redirect('index.php/set_dudi');
        }

    function hapus($id){
            $where = array('id' => $id);
            $this->m_dudi->delete_data($where,'set_dudi');
            redirect('index.php/set_dudi');
            }
    function edit($id){
                $where = array('id' => $id);
                $data['set_dudi'] = $this->m_dudi->edit_data($where,'set_dudi')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('set_dudi/v_edit',$data);
    }
    function update(){
        $id_setdudi = $this->input->post('id_setdudi');
        $id = $this->input->post('id');
        $nama_pembimbing = $this->input->post('nama_pembimbing');
        $nama_jurusan = $this->input->post('nama_jurusan');
        $data = array(
        'id' => $id,
        'nama_pembimbing' => $nama_pembimbing,
        'nama_jurusan' => $nama_jurusan,
        );
        $where = array(
        'id' => $id
        );
        $this->m_dudi->update_data($where,$data,'set_dudi');
        redirect('index.php/set_dudi');
        }
}