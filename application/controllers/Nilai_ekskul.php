<?php
class Nilai_ekskul extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_nilaiekskul');
}

public function index()
	{
    $semester=$this->db->query('select semester from bagi_tugas group by semester')->result();
    $data ['semester'] = $semester;
	$this->load->view('v_nilaiekskul',$data);
	}
function get_kelas(){
        $semester=$this->input->post('semester');
    $kelas=$this->db->query("select * from bagi_tugas a join kelas b on(a.id_kelas=b.id_kelas)")->result();
    echo json_encode($kelas);
    }
function get_ekskul(){
    $kelas=$this->input->post('ekskul');
    $ekskul=$this->db->query("select * from ekskul a join pembina_ekskul b on(a.id_ekskul=b.id_ekskul)")->result();
    echo json_encode($ekskul);
    }
    function get_siswa(){
        $kelas=$this->input->post('kelas');
        $siswa=$this->db->query("select * from rombel a join siswa b on(a.nis=b.nis) where id_kelas='$kelas'")->result();
        echo json_encode($siswa);
        }

function tambah(){
    $data['kelas'] = $this->M_kelas->get_data()->result();

    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('v_tambah_nilaiekskul',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $id = $this->input->post('id');
        $id_kelas = $this->input->post('kelas');
        $semester = $this->input->post('semester');
        $id_ekskul = $this->input->post('ekskul');
        $jumlah = $this->input->post('jumlah');
        
        $no=0;
        while($no<$jumlah){
              $nilai = $this->input->post('nilai'.$no);
              $catatan = $this->input->post('catatan'.$no);
              $nis = $this->input->post('nis'.$no);

            $data = array(
                'id_kelas' => $id_kelas,
                'semester' => $semester,
                'kd_ekskul' => $id_ekskul,
                'nis' => $nis,
                'nilai' => $nilai,
                'catatan' => $catatan
                );
                $this->M_nilaiekskul->insert_data($data,'nilai_ekskul');
                $no++;
              
        }
        
        redirect('index.php/Nilai_ekskul');
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