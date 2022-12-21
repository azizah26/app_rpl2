<?php
class prakerin extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_nilaiprakerin');
}

public function index()
	{
        
        $semester=$this->db->query('select semester from bagi_tugas group by semester')->result();

        $data ['semester'] = $semester;
		$this->load->view('v_nilaiprakerin',$data);
	}

    function get_kelas(){
        $semester=$this->input->post('semester');
    $kelas=$this->db->query("select * from bagi_tugas a join kelas b on(a.id_kelas=b.id_kelas) ")->result();
    echo json_encode($kelas);
    }
    function get_jurusan(){
        $kelas=$this->input->post('kelas');
    $kelas=$this->db->query("select * from kelas a join prakerin b on(a.jurusan=b.jurusan)")->result();
    echo json_encode($kelas);
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
    $this->load->view('v_tambah_walikelas',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $id = $this->input->post('id');
        $semester = $this->input->post('semester');
        $id_kelas = $this->input->post('kelas');
        $jumlah = $this->input->post('jumlah');
        
        $no=0;
        while($no<$jumlah){
              $nis = $this->input->post('nis'.$no);
              $nama_dudi = $this->input->post('nama_dudi'.$no);
              $jurusan = $this->input->post('jurusan'.$no);
              $komponen_nilai = $this->input->post('komponen_nilai'.$no);
            $data = array(
                'id_kelas' => $id_kelas,
                'semester' => $semester,
                'nis' => $nis,
                'nama_dudi' => $nama_dudi,
                'nama_jurusan' => $jurusan,
                'komponen_nilai' => $komponen_nilai,
                );
                $this->M_nilaiprakerin->insert_data($data,'prakerin');
                $no++;
              
        }
        
        redirect('index.php/prakerin');
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
