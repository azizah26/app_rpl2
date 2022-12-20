<?php
class Prakerin extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_prakerin');
}

public function index()
	{
        
        $semester=$this->db->query('select semester from bagi_tugas group by semester')->result();

       
       
        $data ['semester'] = $semester;
		$this->load->view('v_catatan',$data);
	}
    
    function get_kelas(){
        $semester=$this->input->post('semester');
    $kelas=$this->db->query("select * from bagi_tugas a join kelas b on(a.id_kelas=b.id_kelas)")->result();
    echo json_encode($kelas);
    }
    // function get_catatan_wali(){
    //     $kelas=$this->input->post('kelas');
    // $mapel=$this->db->query("select * from catatan_walikelas a join siswa b on(a.nis=b.nis)")->result();
    // echo json_encode($mapel);
    // }
    function get_siswa(){
        $kelas=$this->input->post('kelas');
    $siswa=$this->db->query("select * from rombel a join siswa b on(a.nis=b.nis) where id_kelas='$kelas'")->result();
    echo json_encode($siswa);
    }
function tambah(){
    $data['kelas'] = $this->M_kelas->get_data()->result();
    // $data['guru'] = $this->M_guru->get_data()->result();
    $data['siswa'] = $this->M_siswa->get_data()->result();



    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('v_tambah_siswa',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $semester = $this->input->post('semester');
        $id_kelas = $this->input->post('kelas');
        $jumlah = $this->input->post('jumlah');
        
        $no=0;
        while($no<$jumlah){
              $catatan_wali = $this->input->post('catatan_wali'.$no);
              $nis = $this->input->post('nis'.$no);
            $data = array(
                'semester' => $semester,
                'catatan_wali' => $catatan_wali,
                'nis' => $nis,
                'id_kelas' => $id_kelas
                );
                $this->M_catatan->insert_data($data,'catatan_walikelas');
                $no++;
              
        }
        
        redirect('index.php/catatan_walikelas');
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