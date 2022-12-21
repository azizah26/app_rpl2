<?php
class SetPembinaEkskul extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_pembinaekskul');
$this->load->model('M_ekskul'); 
}

public function index()
	{
        $this->load->view('template/header');
        $ekskul=$this->db->query('select * from pembina_ekskul a join ekskul b on(a.id_ekskul=b.id_ekskul)')->result();
        
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
       
        $data ['ekskul'] = $ekskul;
		$this->load->view('set_ekskul/v_pembinaekskul',$data);
        $this->load->view('template/footer');
	}
function tambah(){
    $data['ekskul'] = $this->M_ekskul->get_data('ekskul')->result();
    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('set_ekskul/v_tambah_pembina',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $id_ekskul = $this->input->post('id_ekskul');
        $nama_pembina = $this->input->post('nama_pembina');
        $semester = $this->input->post('semester');
        $data = array(
        'id_ekskul' => $id_ekskul,
        'nama_pembina' => $nama_pembina,
        'semester' => $semester
        );
        $this->M_pembinaekskul->insert_data($data,'pembina_ekskul');
        redirect('index.php/SetPembinaEkskul');
        }

    function hapus($id){
            $where = array('id' => $id);
            $this->M_pembinaekskul->delete_data($where,'pembina_ekskul');
            redirect('index.php/SetPembinaEkskul');
            }
    function edit($id){
                $where = array('id' => $id);
                $data['pembinaekskul'] = $this->M_pembinaekskul->edit_data($where,'pembina_ekskul')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('set_ekskul/v_edit_pembina',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $id_ekskul = $this->input->post('id_ekskul');
        $nama_pembina = $this->input->post('nama_pembina');
        $semester = $this->input->post('semester');
        $data = array(
        'id_ekskul' => $id_ekskul,
        'nama_pembina' => $nama_pembina,
        'semester' => $semester
        );
        $where = array(
        'id' => $id
        );
        $this->M_pembinaekskul->update_data($where,$data,'pembina_ekskul');
        redirect('index.php/SetPembinaEkskul');
        }
}