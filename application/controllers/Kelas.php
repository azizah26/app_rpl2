<?php
class Kelas extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_kelas');
$this->load->model('M_jurusan'); 
}

public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');

        $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
		$this->load->view('kelas/v_kelas',$data);
        $this->load->view('template/footer');
	}
function tambah(){
    $data['jurusan'] = $this->M_jurusan->get_data('jurusan')->result();
    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('kelas/v_input_kelas',$data);
    $this->load->view('template/footer');   
    }
    function tambah_aksi(){
        $nama_kelas = $this->input->post('nama_kelas');
        $tingkat_kelas = $this->input->post('tingkat_kelas');
        $jurusan = $this->input->post('jurusan');
        $data = array(
        'nama_kelas' => $nama_kelas,
        'tingkat_kelas' => $tingkat_kelas,
        'jurusan' => $jurusan
        );
        $this->M_kelas->insert_data($data,'kelas');
        redirect('index.php/kelas');
        }

    function hapus($id_kelas){
            $where = array('id_kelas' => $id_kelas);
            $this->M_kelas->delete_data($where,'kelas');
            redirect('index.php/kelas');
            }
    function edit($id_kelas){
                $where = array('id_kelas' => $id_kelas);
                $data['kelas'] = $this->M_kelas->edit_data($where,'kelas')->result();
                $data['jurusan'] = $this->M_jurusan->get_data('jurusan')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('kelas/v_edit',$data);
                $this->load->view('template/footer');   
    }
    function update(){
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $tingkat_kelas = $this->input->post('tingkat_kelas');
        $jurusan = $this->input->post('jurusan');
        $data = array(
        'nama_kelas' => $nama_kelas,
        'tingkat_kelas' => $tingkat_kelas,
        'jurusan' => $jurusan,
        );
        $where = array(
        'id_kelas' => $id_kelas
        );
        $this->M_kelas->update_data($where,$data,'kelas');
        redirect('index.php/kelas');
        }
}