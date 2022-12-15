<?php
class Nilai_akhir extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_akhir');
}

public function index()
	{
        
        $semester=$this->db->query('select semester from bagi_tugas group by semester')->result();

       
       
        $data ['semester'] = $semester;
		$this->load->view('v_nilaiakhir',$data);
	}
    function get_kelas(){
        $semester=$this->input->post('semester');
    $kelas=$this->db->query("select * from bagi_tugas a join kelas b on(a.id_kelas=b.id_kelas)")->result();
    echo json_encode($kelas);
    }
    function get_mapel(){
        $kelas=$this->input->post('kelas');
    $mapel=$this->db->query("select * from bagi_tugas a join mapel b on(a.kd_mapel=b.kd_mapel)")->result();
    echo json_encode($mapel);
    }
    function get_siswa(){
        $kelas=$this->input->post('kelas');
    $siswa=$this->db->query("select * from rombel a join siswa b on(a.nis=b.nis) where id_kelas=$kelas")->row();
    echo json_encode($siswa);
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
        $this->m_walikelas->insert_data($data,'walikelas');
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