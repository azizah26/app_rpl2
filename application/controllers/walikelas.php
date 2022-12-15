<?php
class walikelas extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_walikelas');
$this->load->model('M_kelas');
$this->load->model('M_guru');

$this->load->helper('url');
}

public function index()
	{
        $this->load->view('template/header');
        $wali=$this->db->query('select * from walikelas a join kelas b on(a.id_kelas=b.id_kelas) join guru c on(a.id_guru=c.id_guru)')->result();

        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
       
        $data ['walikelas'] = $wali;
		$this->load->view('walikelas/v_walikelas',$data);
        $this->load->view('template/footer');
	}
function tambah(){
    $data['kelas'] = $this->M_kelas->get_data()->result();
    $data['guru'] = $this->M_guru->get_data()->result();


    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('walikelas/v_tambah_walikelas',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $id = $this->input->post('id');
        $id_kelas = $this->input->post('id_kelas');
        $id_guru = $this->input->post('id_guru');
        $semester = $this->input->post('semester');
        $data = array(
        'id' => $id,
        'id_kelas' => $id_kelas,
        'id_guru' => $id_guru,
        'semester' => $semester
        );
        $this->M_guru->insert_data($data,'guru');
        redirect('index.php/walikelas');
        }

    function hapus($id){
            $where = array('id' => $id);
            $this->m_walikelas->delete_data($where,'walikelas');
            redirect('index.php/walikelas');
            }
    function edit($id){
                $where = array('id' => $id);
                $data['walikelas'] = $this->m_walikelas->edit_data($where,'walikelas')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('walikelas/v_edit_walikelas',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $id_kelas = $this->input->post('id_kelas');
        $id_guru = $this->input->post('id_guru');
        $semester = $this->input->post('semester');
        $tapel = $this->input->post('tapel');
        $data = array(
        'id_kelas' => $id_kelas,
        'id_guru' => $id_guru,
        'semester' => $semester,
        'tapel' => $tapel
        );
        $where = array(
        'id' => $id
        );
        $this->m_walikelas->update_data($where,$data,'walikelas');
        redirect('index.php/walikelas');
        }
}