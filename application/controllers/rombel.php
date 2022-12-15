<?php
class rombel extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_rombel');
$this->load->model('M_siswa');
$this->load->model('M_kelas');

}

public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');

        $data['rombel'] = $this->M_rombel->get_data('rombel')->result();
		$this->load->view('rombel/v_rombel',$data);
        $this->load->view('template/footer');
	}
function tambah(){
    $data['siswa'] = $this->M_siswa->get_data('siswa')->result();
    $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('rombel/v_input_rombel',$data);
    $this->load->view('template/footer');   
    }
    function tambah_aksi(){
        $id_kelas = $this->input->post('id_kelas');
        $kurikulum = $this->input->post('kurikulum');
        $nis = $this->input->post('nis');
        $nama_rombel= $this->input->post('nama_rombel');
        $data = array(
        'id_kelas' => $id_kelas,
        'kurikulum' => $kurikulum,
        'nis' => $nis,
        'nama_rombel' => $nama_rombel,
        );
        $this->M_rombel->insert_data($data,'rombel');
        redirect('index.php/rombel');
        }

    function hapus($id){
            $where = array('id' => $id);
            $this->M_rombel->hapus_data($where,'rombel');
            redirect('index.php/rombel');
            }
            function edit($id){
                $where = array('id' => $id);
                $data['rombel'] = $this->M_rombel->edit_data($where,'rombel')->result();
                $this->load->view('template/header');
                $this->load->view('template/wrapper');
                $this->load->view('template/navbar');
                $this->load->view('rombel/v_edit',$data);
                $this->load->view('template/footer');
    }
    function update(){
        $id_kelas= $this->input->post('id_kelas');
        $kurikulum = $this->input->post('kurikulum');
        $nis = $this->input->post('nis');
        $nama_rombel=$this->input->post('nama_rombel');
        $data = array(
        'id_kelas' => $id_kelas,
        'kurikulum' => $kurikulum,
        'nis'=>$nis,
        'nama_rombel'=>$nama_rombel
        );
        $where = array(
        'id' => $id
        );
        $this->M_rombel->update_data($where,$data,'rombel');
        redirect('index.php/rombel');
        }
}